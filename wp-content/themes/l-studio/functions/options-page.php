<?php

class WebtitovEditContacts
{
  /** Holds the values to be used in the fields callbacks **/
  private $options;

  /** Start up **/
  public function __construct()
  {
    add_action('admin_menu', array($this, 'webt_edit_contacts_page'));
    add_action('admin_init', array($this, 'page_init'));
  }

  /** Add options page **/
  public function webt_edit_contacts_page()
  {
    add_options_page(
      'Контакты компании',
      'Контакты компании',
      'manage_options',
      'webt-edit-contacts',
      array($this, 'create_edit_contacts_page')
    );

    add_options_page(
      'SEO настройки',
      'SEO настройки',
      'manage_options',
      'webt-edit-seo',
      array($this, 'create_edit_seo_page')
    );
  }

  /** Options page callback **/
  public function create_edit_contacts_page()
  {
    // Set class property
    $this->options = get_option('webt_contacts_option');
    ?>
    <div class="wrap">
      <h2>Контакты компании</h2>
      <form method="post" action="options.php">
        <?php
        // This prints out all hidden setting fields
        settings_fields('webt_contacts_group');
        do_settings_sections('webt-edit-contacts');
        submit_button();
        ?>
      </form>
    </div>
    <?php
  }

  /** Register and add settings **/
  public function page_init()
  {
    /** Области полей **/
    // Контакты компании
    register_setting(
      'webt_contacts_group',
      'webt_contacts_option',
      array($this, 'sanitize')
    );

    /** Объявление полей **/

    // Email общий
    add_settings_field(
      'webt_email_all', // ID поля
      'E-mail адрес', // Заголовок поля
      array($this, 'contacts_callback_email_all'), // Callback
      'webt-edit-contacts', // Страница вывода
      'webt_contacts_emails' // Секция вывода
    );

	  // Номер телефона
	  add_settings_field(
		  'webt_phone', // ID поля
		  'Номер телефона', // Заголовок поля
		  array($this, 'contacts_callback_phone'), // Callback
		  'webt-edit-contacts', // Страница вывода
		  'webt_contacts_emails' // Секция вывода
	  );

	  // Номер телефона 2
	  add_settings_field(
		  'webt_phone_2', // ID поля
		  'Номер телефона 2', // Заголовок поля
		  array($this, 'contacts_callback_phone_2'), // Callback
		  'webt-edit-contacts', // Страница вывода
		  'webt_contacts_emails' // Секция вывода
	  );


    // Время работы
    add_settings_field(
      'webt_worktime', // ID поля
      'Время работы', // Заголовок поля
      array($this, 'contacts_callback_worktime'), // Callback
      'webt-edit-contacts', // Страница вывода
      'webt_contacts_emails' // Секция вывода
    );

	  // Адрес
	  add_settings_field(
		  'webt_address', // ID поля
		  'Адрес', // Заголовок поля
		  array($this, 'contacts_callback_address'), // Callback
		  'webt-edit-contacts', // Страница вывода
		  'webt_contacts_emails' // Секция вывода
	  );

    // Ссылка на VK
    add_settings_field(
      'webt_social_vk', // ID поля
      'Ссылка на VK', // Заголовок поля
      array($this, 'contacts_callback_social_vk'), // Callback
      'webt-edit-contacts', // Страница вывода
      'webt_contacts_emails' // Секция вывода
    );

    // Ссылка на YT
    add_settings_field(
      'webt_social_yt', // ID поля
      'Ссылка на YT', // Заголовок поля
      array($this, 'contacts_callback_social_yt'), // Callback
      'webt-edit-contacts', // Страница вывода
      'webt_contacts_emails' // Секция вывода
    );


    /** Секции полей **/
    // Секция с E-mail
    add_settings_section(
      'webt_contacts_emails', // ID секции
      '', // Заголовок секции
      '', // Callback
      'webt-edit-contacts' // Страница вывода
    );
    
  }

  /** Sanitize each setting field as needed **/
  public function sanitize($input)
  {
    $new_input = array();

    // Email общий
    if (isset($input['webt_email_all']))
      $new_input['webt_email_all'] = sanitize_text_field($input['webt_email_all']);

	  // Номер телефона
	  if (isset($input['webt_phone']))
		  $new_input['webt_phone'] = sanitize_text_field($input['webt_phone']);

	  // Номер телефона 2
	  if (isset($input['webt_phone_2']))
		  $new_input['webt_phone_2'] = sanitize_text_field($input['webt_phone_2']);

    // Время работы
    if (isset($input['webt_worktime']))
      $new_input['webt_worktime'] = sanitize_text_field($input['webt_worktime']);

	  // Адрес
	  if (isset($input['webt_address']))
		  $new_input['webt_address'] = sanitize_text_field($input['webt_address']);

    // Ссылка на VK
    if (isset($input['webt_social_vk']))
      $new_input['webt_social_vk'] = sanitize_text_field($input['webt_social_vk']);

    // Ссылка на YT
    if (isset($input['webt_social_yt']))
      $new_input['webt_social_yt'] = sanitize_text_field($input['webt_social_yt']);


    return $new_input;
  }

  /** Print the Section text **/
  public function print_section_info()
  {
    print 'Enter your settings below:';
  }

  /** Get the settings option array and print one of its values
   *  Вывод полей
   */


  // Email общий
  public function contacts_callback_email_all()
  {
    printf(
      '<input type="text" id="webt_email_all" name="webt_contacts_option[webt_email_all]" value="%s" />',
      isset($this->options['webt_email_all']) ? esc_attr($this->options['webt_email_all']) : ''
    );
  }

	// Номер телефона
	public function contacts_callback_phone()
	{
		printf(
			'<input type="text" id="webt_phone" name="webt_contacts_option[webt_phone]" value="%s" />',
			isset($this->options['webt_phone']) ? esc_attr($this->options['webt_phone']) : ''
		);
	}

	// Номер телефона 2
	public function contacts_callback_phone_2()
	{
		printf(
			'<input type="text" id="webt_phone_2" name="webt_contacts_option[webt_phone_2]" value="%s" />',
			isset($this->options['webt_phone_2']) ? esc_attr($this->options['webt_phone_2']) : ''
		);
	}

  // Адрес
  public function contacts_callback_address()
  {
    printf(
      '<input type="text" id="webt_address" name="webt_contacts_option[webt_address]" value="%s" />',
      isset($this->options['webt_address']) ? esc_attr($this->options['webt_address']) : ''
    );
  }

	// Время работы
	public function contacts_callback_worktime()
	{
		printf(
			'<input type="text" id="webt_worktime" name="webt_contacts_option[webt_worktime]" value="%s" />',
			isset($this->options['webt_worktime']) ? esc_attr($this->options['webt_worktime']) : ''
		);
	}

  // Ссылка на VK
  public function contacts_callback_social_vk()
  {
    printf(
      '<input type="text" id="webt_social_vk" name="webt_contacts_option[webt_social_vk]" value="%s" />',
      isset($this->options['webt_social_vk']) ? esc_attr($this->options['webt_social_vk']) : ''
    );
  }

  // Ссылка на YT
  public function contacts_callback_social_yt()
  {
    printf(
      '<input type="text" id="webt_social_yt" name="webt_contacts_option[webt_social_yt]" value="%s" />',
      isset($this->options['webt_social_yt']) ? esc_attr($this->options['webt_social_yt']) : ''
    );
  }

}


if (is_admin())
  $my_settings_page = new WebtitovEditContacts();