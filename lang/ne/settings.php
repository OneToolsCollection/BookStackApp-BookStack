<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'सेटिङ्ग',
    'settings_save' => 'सेटिङ्ग सुरक्षित गर्नुहोस्',
    'system_version' => 'सिस्टम संस्करण',
    'categories' => 'क्याटोगोरीहरु',

    // App Settings
    'app_customization' => 'अनुकूलन',
    'app_features_security' => 'फिचरहरू र सुरक्षा',
    'app_name' => 'एप्लिकेसन नाम',
    'app_name_desc' => 'यो नाम हेडरमा र कुनै पनि प्रणालीले पठाएको इमेलमा देखाइनेछ।',
    'app_name_header' => 'हेडरमा नाम देखाउनुहोस्',
    'app_public_access' => 'सार्वजनिक पहुँच',
    'app_public_access_desc' => 'यो विकल्प सक्षम गर्दा, लगइन नगरेका आगन्तुकहरूले तपाईंको BookStack मा सामग्री पहुँच गर्न सक्नेछन्।',
    'app_public_access_desc_guest' => 'सार्वजनिक आगन्तुकहरूको पहुँच "Guest" प्रयोगकर्ताबाट नियन्त्रण गर्न सकिन्छ।',
    'app_public_access_toggle' => 'सार्वजनिक पहुँच अनुमति दिनुहोस्',
    'app_public_viewing' => 'सार्वजनिक हेर्न अनुमति दिनुहोस्?',
    'app_secure_images' => 'उच्च सुरक्षा छवि अपलोडहरू',
    'app_secure_images_toggle' => 'उच्च सुरक्षा छवि अपलोडहरू सक्षम गर्नुहोस्',
    'app_secure_images_desc' => 'प्रदर्शन कारणहरूका लागि, सबै छविहरू सार्वजनिक हुन्छन्। यो विकल्पले छवि URL अगाडि एउटा अनियमित, अनुमान गर्न गाह्रो स्ट्रिङ थप्छ। सजिलो पहुँच रोक्न निर्देशिका सूचीकरण निष्क्रिय गर्नुहोस्।',
    'app_default_editor' => 'डिफल्ट पृष्ठ सम्पादक',
    'app_default_editor_desc' => 'नयाँ पृष्ठ सम्पादन गर्दा डिफल्ट रूपमा प्रयोग हुने सम्पादक चयन गर्नुहोस्। अनुमति अनुसार पृष्ठ स्तरमा यो परिवर्तन गर्न सकिन्छ।',
    'app_custom_html' => 'कस्टम HTML हेड सामग्री',
    'app_custom_html_desc' => 'यहाँ थपिएको कुनै पनि सामग्री प्रत्येक पृष्ठको <head> सेक्सनको तल्लो भागमा समावेश हुनेछ। स्टाइल ओभरराइड वा एनालिटिक्स कोड थप्न उपयोगी।',
    'app_custom_html_disabled_notice' => 'कस्टम HTML हेड सामग्री यस सेटिङ पृष्ठमा असक्षम गरिएको छ ताकि कुनै समस्या भएमा फर्काउन सकियोस्।',
    'app_logo' => 'एप्लिकेसन लोगो',
    'app_logo_desc' => 'यो एप्लिकेसन हेडर बार लगायत अन्य ठाउँहरूमा प्रयोग हुन्छ। यो छवि ८६px उचाइको हुनु पर्नेछ। ठूलो छविहरू सानो गरिनेछ।',
    'app_icon' => 'एप्लिकेसन आइकन',
    'app_icon_desc' => 'यो आइकन ब्राउजर ट्याब र छोटोमार्ग आइकनहरूका लागि प्रयोग हुन्छ। PNG २५६px वर्गाकार छवि हुनुपर्छ।',
    'app_homepage' => 'एप्लिकेसन होमपेज',
    'app_homepage_desc' => 'डिफल्ट दृश्यको सट्टा होमपेजमा देखाउनको लागि कुनै दृश्य चयन गर्नुहोस्। चयन गरिएका पृष्ठहरूको अनुमति बेवास्ता गरिनेछ।',
    'app_homepage_select' => 'पृष्ठ चयन गर्नुहोस्',
    'app_footer_links' => 'फुटर लिंकहरू',
    'app_footer_links_desc' => 'साइटको फुटरमा देखाउन लिंकहरू थप्नुहोस्। यी प्रायः पृष्ठहरूको तल्लो भागमा देखिनेछन्, जसमा लगइन आवश्यक नभएका पृष्ठहरू पनि समावेश छन्। "trans::<key>" ले प्रणाली-परिभाषित अनुवाद प्रयोग गर्न सकिन्छ। उदाहरण: "trans::common.privacy_policy" ले "गोपनीयता नीति" र "trans::common.terms_of_service" ले "सेवा सर्तहरू" देखाउनेछ।',
    'app_footer_links_label' => 'लिंक लेबल',
    'app_footer_links_url' => 'लिंक URL',
    'app_footer_links_add' => 'फुटर लिंक थप्नुहोस्',
    'app_disable_comments' => 'टिप्पणीहरू असक्षम पार्नुहोस्',
    'app_disable_comments_toggle' => 'टिप्पणीहरू असक्षम पार्नुहोस्',
    'app_disable_comments_desc' => 'एप्लिकेसनका सबै पृष्ठहरूमा टिप्पणीहरू असक्षम पार्दछ। <br> अस्तित्वमा रहेका टिप्पणीहरू देखाइने छैनन्।',

    // Color settings
    'color_scheme' => 'एप्लिकेसन रंग योजना',
    'color_scheme_desc' => 'एप्लिकेसनको प्रयोगकर्ता इन्टरफेसमा प्रयोग हुने रंगहरू सेट गर्नुहोस्। रंगहरू डार्क र लाइट मोडका लागि अलग्गै सेट गर्न सकिन्छ जसले विषयवस्तु र पठनीयता सुधार गर्छ।',
    'ui_colors_desc' => 'एप्लिकेसनको मुख्य रंग र डिफल्ट लिंक रंग सेट गर्नुहोस्। मुख्य रंग मुख्य रूपमा हेडर ब्यानर, बटनहरू र इन्टरफेस सजावटमा प्रयोग हुन्छ। डिफल्ट लिंक रंग लेखिएको सामग्री र इन्टरफेस दुवैमा प्रयोग हुन्छ।',
    'app_color' => 'मुख्य रंग',
    'link_color' => 'डिफल्ट लिंक रंग',
    'content_colors_desc' => 'पृष्ठ संगठन संरचनाका सबै तत्वहरूका लागि रंग सेट गर्नुहोस्। पठनीयताको लागि डिफल्ट रंगहरूसँग मिल्दोजुल्दो चमक छनौट गर्न सुझाव दिइन्छ।',
    'bookshelf_color' => 'शेल्फ रंग',
    'book_color' => 'पुस्तक रंग',
    'chapter_color' => 'अध्याय रंग',
    'page_color' => 'पृष्ठ रंग',
    'page_draft_color' => 'पृष्ठ मसौदा रंग',

    // Registration Settings
    'reg_settings' => 'दर्ता',
    'reg_enable' => 'दर्ता सक्षम गर्नुहोस्',
    'reg_enable_toggle' => 'दर्ता सक्षम गर्नुहोस्',
    'reg_enable_desc' => 'दर्ता सक्षम हुँदा प्रयोगकर्ताले आफैंलाई एप्लिकेसन प्रयोगकर्ताको रूपमा दर्ता गर्न सक्नेछन्। दर्ता हुँदा तिनीहरूलाई डिफल्ट प्रयोगकर्ता भूमिका दिइन्छ।',
    'reg_default_role' => 'दर्ता पछि डिफल्ट प्रयोगकर्ता भूमिका',
    'reg_enable_external_warning' => 'बाह्य LDAP वा SAML प्रमाणीकरण सक्रिय हुँदा माथि उल्लेखित विकल्प बेवास्ता गरिनेछ। प्रमाणीकरण सफल भएमा गैर-अस्तित्व प्रयोगकर्ताका खाताहरू स्वचालित सिर्जना हुनेछ।',
    'reg_email_confirmation' => 'इमेल पुष्टि',
    'reg_email_confirmation_toggle' => 'इमेल पुष्टि आवश्यक छ',
    'reg_confirm_email_desc' => 'यदि डोमेन प्रतिबन्ध प्रयोग गरिएको छ भने इमेल पुष्टि आवश्यक हुनेछ र यो विकल्प बेवास्ता गरिनेछ।',
    'reg_confirm_restrict_domain' => 'डोमेन प्रतिबन्ध',
    'reg_confirm_restrict_domain_desc' => 'दर्ता सीमित गर्न चाहनु भएको इमेल डोमेन्सलाई अल्पविरामले छुट्याएर प्रविष्ट गर्नुहोस्। प्रयोगकर्ताहरूलाई ठेगाना पुष्टि गर्न इमेल पठाइनेछ। <br> दर्ता सफल भएपछि प्रयोगकर्ताले इमेल ठेगाना परिवर्तन गर्न सक्नेछन्।',
    'reg_confirm_restrict_domain_placeholder' => 'कुनै प्रतिबन्ध छैन',

    // Sorting Settings
    'sorting' => 'क्रमबद्धता',
    'sorting_book_default' => 'डिफल्ट पुस्तक क्रम',
    'sorting_book_default_desc' => 'नयाँ पुस्तकहरूमा लागु गर्न डिफल्ट क्रम नियम चयन गर्नुहोस्। यो अस्तित्वमा रहेका पुस्तकहरूमा असर पार्दैन र पुस्तक अनुसार ओभरराइड गर्न सकिन्छ।',
    'sorting_rules' => 'क्रम नियमहरू',
    'sorting_rules_desc' => 'यी पूर्वनिर्धारित क्रम सञ्चालनहरू हुन् जुन प्रणालीमा सामग्रीमा लागू गर्न सकिन्छ।',
    'sort_rule_assigned_to_x_books' => ':count पुस्तकमा लागू गरिएको|:count पुस्तकहरूमा लागू गरिएको',
    'sort_rule_create' => 'क्रम नियम सिर्जना गर्नुहोस्',
    'sort_rule_edit' => 'क्रम नियम सम्पादन गर्नुहोस्',
    'sort_rule_delete' => 'क्रम नियम मेटाउनुहोस्',
    'sort_rule_delete_desc' => 'यस क्रम नियमलाई प्रणालीबाट हटाउनुहोस्। यस नियम प्रयोग गरिएका पुस्तकहरू म्यानुअल क्रमबद्धतामा फर्कनेछन्।',
    'sort_rule_delete_warn_books' => 'यो क्रम नियम हाल :count पुस्तक(हरू) मा प्रयोग भैरहेको छ। के तपाईं पक्का यो मेटाउन चाहनुहुन्छ?',
    'sort_rule_delete_warn_default' => 'यो क्रम नियम हाल पुस्तकहरूको डिफल्ट रूपमा प्रयोग भैरहेको छ। के तपाईं पक्का यो मेटाउन चाहनुहुन्छ?',
    'sort_rule_details' => 'क्रम नियम विवरण',
    'sort_rule_details_desc' => 'यस क्रम नियमको नाम सेट गर्नुहोस्, जुन प्रयोगकर्ताहरूले क्रम छनौट गर्दा सूचिमा देखिनेछ।',
    'sort_rule_operations' => 'क्रम सञ्चालनहरू',
    'sort_rule_operations_desc' => 'उपलब्ध सञ्चालनहरूको सूचीबाट क्रम क्रियाकलापहरू सेट गर्नुहोस्। प्रयोग गर्दा, माथिबाट तल सम्म क्रमसँगै लागू गरिनेछ। यहाँ गरिएको कुनै पनि परिवर्तन सुरक्षित गर्दा सबै लागू पुस्तकहरूमा लागु हुनेछ।',
    'sort_rule_available_operations' => 'उपलब्ध सञ्चालनहरू',
    'sort_rule_available_operations_empty' => 'कोही सञ्चालन बाँकी छैनन्',
    'sort_rule_configured_operations' => 'कन्फिगर गरिएको सञ्चालनहरू',
    'sort_rule_configured_operations_empty' => '"उपलब्ध सञ्चालनहरू" सूचीबाट सञ्चालनहरू तान्नुहोस्/थप्नुहोस्',
    'sort_rule_op_asc' => '(Ascending)',
    'sort_rule_op_desc' => '(Descending)',
    'sort_rule_op_name' => 'नाम - वर्णानुक्रम',
    'sort_rule_op_name_numeric' => 'नाम - सङ्ख्यात्मक',
    'sort_rule_op_created_date' => 'सिर्जना मिति',
    'sort_rule_op_updated_date' => 'अपडेट मिति',
    'sort_rule_op_chapters_first' => 'पहिले अध्यायहरू',
    'sort_rule_op_chapters_last' => 'अन्त्यमा अध्यायहरू',

    // Maintenance settings
    'maint' => 'सम्भार',
    'maint_image_cleanup' => 'छविहरू सफा गर्नुहोस्',
    'maint_image_cleanup_desc' => 'पृष्ठ र संस्करण सामग्री स्क्यान गरी कुन छविहरू र चित्रहरू प्रयोगमा छन् र कुनहरू अनावश्यक छन् जाँच गर्दछ। यो सञ्चालन अघि पूर्ण डाटाबेस र छवि ब्याकअप बनाउनुहोस्।',
    'maint_delete_images_only_in_revisions' => 'पुराना पृष्ठ संस्करणहरूमा मात्र रहेका छविहरू पनि मेटाउनुहोस्',
    'maint_image_cleanup_run' => 'सफा गर्ने प्रक्रिया सुरु गर्नुहोस्',
    'maint_image_cleanup_warning' => ':count सम्भावित अप्रयुक्त छविहरू फेला परे। के तपाईं पक्का यी छविहरू मेटाउन चाहनुहुन्छ?',
    'maint_image_cleanup_success' => ':count सम्भावित अप्रयुक्त छविहरू फेला परे र मेटाइयो!',
    'maint_image_cleanup_nothing_found' => 'कुनै अप्रयुक्त छवि फेला परेन, केही मेटाइएन!',
    'maint_send_test_email' => 'परीक्षण इमेल पठाउनुहोस्',
    'maint_send_test_email_desc' => 'यो तपाईको प्रोफाइलमा दिइएको इमेल ठेगानामा परीक्षण इमेल पठाउँछ।',
    'maint_send_test_email_run' => 'परीक्षण इमेल पठाउनुहोस्',
    'maint_send_test_email_success' => 'इमेल पठाइयो :address',
    'maint_send_test_email_mail_subject' => 'परीक्षण इमेल',
    'maint_send_test_email_mail_greeting' => 'इमेल वितरण सफल देखिन्छ!',
    'maint_send_test_email_mail_text' => 'बधाई छ! तपाईंले यो इमेल प्राप्त गर्नुभएकोले तपाईका इमेल सेटिङहरू ठीकसँग कन्फिगर भएका छन्।',
    'maint_recycle_bin_desc' => 'मेटाइएका शेल्फ, पुस्तक, अध्याय र पृष्ठहरू रीसायकल बिनमा पठाइन्छ जसबाट पुनर्स्थापना वा स्थायी मेटाई गर्न सकिन्छ। पुराना वस्तुहरू प्रणाली कन्फिगरेसन अनुसार स्वचालित रूपमा हटाउन सकिन्छ।',
    'maint_recycle_bin_open' => 'रीसायकल बिन खोल्नुहोस्',
    'maint_regen_references' => 'सन्दर्भहरू पुनः उत्पन्न गर्नुहोस्',
    'maint_regen_references_desc' => 'यो क्रियाले डाटाबेस भित्र वस्तुहरू बीचको सन्दर्भ सूचकांक पुनः बनाउँछ। सामान्यतया यो स्वतः हुन्छ, तर पुराना वा अनअधिकारिक विधिबाट थपिएको सामग्रीलाई सूचीकृत गर्न उपयोगी हुन्छ।',
    'maint_regen_references_success' => 'सन्दर्भ सूचकांक पुनः उत्पन्न गरियो!',
    'maint_timeout_command_note' => 'सूचना: यो क्रियामा समय लाग्न सक्छ जसले केही वेब वातावरणहरूमा टाइमआउट समस्या ल्याउन सक्छ। विकल्पको रूपमा टर्मिनल कमाण्ड प्रयोग गरेर गर्न सकिन्छ।',

    // Recycle Bin
    'recycle_bin' => 'रीसायकल बिन',
    'recycle_bin_desc' => 'यहाँ तपाईंले मेटाइएका वस्तुहरू पुनर्स्थापना गर्न वा प्रणालीबाट स्थायी रूपमा हटाउन सक्नुहुन्छ। यो सूची प्रणालीका अन्य गतिविधि सूचिहरू जस्तो फिल्टर नभएको छ।',
    'recycle_bin_deleted_item' => 'मेटाइएको वस्तु',
    'recycle_bin_deleted_parent' => 'मूल',
    'recycle_bin_deleted_by' => 'मेटाउने व्यक्ति',
    'recycle_bin_deleted_at' => 'मेटाइने समय',
    'recycle_bin_permanently_delete' => 'स्थायी रूपमा मेटाउनुहोस्',
    'recycle_bin_restore' => 'पुन: भण्डारण गर्नुहोस्',
    'recycle_bin_contents_empty' => 'रिसायकल बिन हाल खाली छ',
    'recycle_bin_empty' => 'रिसायकल बिन खाली गर्नुहोस्',
    'recycle_bin_empty_confirm' => 'यसले रिसायकल बिनभित्रका सबै वस्तुहरू र तिनीहरूको सामग्री स्थायी रूपमा मेटाउनेछ। के तपाईं पक्का खाली गर्न चाहनुहुन्छ?',
    'recycle_bin_destroy_confirm' => 'यस क्रियाले यो वस्तु र तल सूचीबद्ध कुनै पनि सन्तान तत्वहरूलाई स्थायी रूपमा प्रणालीबाट मेटाउनेछ र तपाईंले पुनः प्राप्त गर्न सक्नुहुने छैन। के तपाईं पक्का स्थायी रूपमा मेटाउन चाहनुहुन्छ?',
    'recycle_bin_destroy_list' => 'मेटाइने वस्तुहरू',
    'recycle_bin_restore_list' => 'पुनर्स्थापना गरिने वस्तुहरू',
    'recycle_bin_restore_confirm' => 'यो क्रियाले मेटाइएको वस्तु र कुनै पनि सन्तान तत्वहरूलाई मूल स्थानमा पुनर्स्थापना गर्नेछ। यदि मूल स्थान पनि मेटाइएको छ र रिसायकल बिनमा छ भने मूल वस्तुलाई पनि पुनर्स्थापना गर्नुपर्नेछ।',
    'recycle_bin_restore_deleted_parent' => 'यस वस्तुको मूल पनि मेटाइएको छ। मूल वस्तु पुनर्स्थापित नभएसम्म यो वस्तु मेटिएको नै रहनेछ।',
    'recycle_bin_restore_parent' => 'मूल पुनर्स्थापना गर्नुहोस्',
    'recycle_bin_destroy_notification' => 'रिसायकल बिनबाट कुल :count वस्तुहरू मेटाइयो।',
    'recycle_bin_restore_notification' => 'रिसायकल बिनबाट कुल :count वस्तुहरू पुनर्स्थापित गरियो।',

    // Audit Log
    'audit' => 'अडिट लग',
    'audit_desc' => 'यो अडिट लग प्रणालीमा ट्र्याक गरिएका गतिविधिहरूको सूची देखाउँछ। यो सूची प्रणालीका समान गतिविधि सूचीहरू भन्दा फरक फिल्टररहित हुन्छ।',
    'audit_event_filter' => 'घटना फिल्टर',
    'audit_event_filter_no_filter' => 'फिल्टर छैन',
    'audit_deleted_item' => 'मेटाइएको वस्तु',
    'audit_deleted_item_name' => 'नाम: :name',
    'audit_table_user' => 'प्रयोगकर्ता',
    'audit_table_event' => 'घटना',
    'audit_table_related' => 'सम्बन्धित वस्तु वा विवरण',
    'audit_table_ip' => 'IP ठेगाना',
    'audit_table_date' => 'गतिविधि मिति',
    'audit_date_from' => 'मिति दायरा सुरु',
    'audit_date_to' => 'मिति दायरा अन्त्य',

    // Role Settings
    'roles' => 'भूमिकाहरू',
    'role_user_roles' => 'प्रयोगकर्ता भूमिका',
    'roles_index_desc' => 'भूमिकाहरू प्रयोगकर्ताहरूलाई समूहमा राख्न र उनीहरूको सदस्यलाई प्रणाली अनुमति दिन प्रयोग हुन्छ। यदि कुनै प्रयोगकर्ता धेरै भूमिका मा छ भने तिनका अधिकारहरू जोडिनेछन् र सबै क्षमता प्राप्त हुनेछन्।',
    'roles_x_users_assigned' => ':count प्रयोगकर्तालाई भूमिका दिइयो|:count प्रयोगकर्ताहरूलाई भूमिका दिइयो',
    'roles_x_permissions_provided' => ':count अनुमति दिइयो|:count अनुमति दिइयो',
    'roles_assigned_users' => 'दिइएका प्रयोगकर्ताहरू',
    'roles_permissions_provided' => 'दिइएका अनुमति',
    'role_create' => 'नयाँ भूमिका सिर्जना गर्नुहोस्',
    'role_delete' => 'भूमिका मेटाउनुहोस्',
    'role_delete_confirm' => 'यसले \':roleName\' नामको भूमिका मेटाउनेछ।',
    'role_delete_users_assigned' => 'यस भूमिकामा :userCount प्रयोगकर्ता छन्। यदि तपाईंले यी प्रयोगकर्ताहरूलाई अर्को भूमिकामा सार्न चाहनुहुन्छ भने तल नयाँ भूमिका चयन गर्नुहोस्।',
    'role_delete_no_migration' => "प्रयोगकर्ताहरू सार्नु हुँदैन",
    'role_delete_sure' => 'के तपाईं पक्का यो भूमिका मेटाउन चाहनुहुन्छ?',
    'role_edit' => 'भूमिका सम्पादन गर्नुहोस्',
    'role_details' => 'भूमिका विवरण',
    'role_name' => 'भूमिका नाम',
    'role_desc' => 'भूमिकाको संक्षिप्त विवरण',
    'role_mfa_enforced' => 'बहु-फ्याक्टर प्रमाणीकरण आवश्यक',
    'role_external_auth_id' => 'बाह्य प्रमाणीकरण ID हरू',
    'role_system' => 'प्रणाली अनुमति',
    'role_manage_users' => 'प्रयोगकर्ताहरू व्यवस्थापन गर्नुहोस्',
    'role_manage_roles' => 'भूमिका र अनुमति व्यवस्थापन गर्नुहोस्',
    'role_manage_entity_permissions' => 'सबै पुस्तक, अध्याय र पृष्ठ अनुमति व्यवस्थापन गर्नुहोस्',
    'role_manage_own_entity_permissions' => 'आफ्नो पुस्तक, अध्याय र पृष्ठ अनुमति व्यवस्थापन गर्नुहोस्',
    'role_manage_page_templates' => 'पृष्ठ टेम्प्लेट व्यवस्थापन गर्नुहोस्',
    'role_access_api' => 'प्रणाली API पहुँच',
    'role_manage_settings' => 'एप सेटिङ व्यवस्थापन गर्नुहोस्',
    'role_export_content' => 'सामग्री निर्यात गर्नुहोस्',
    'role_import_content' => 'सामग्री आयात गर्नुहोस्',
    'role_editor_change' => 'पृष्ठ सम्पादक परिवर्तन गर्नुहोस्',
    'role_notifications' => 'सूचनाहरू प्राप्त र व्यवस्थापन गर्नुहोस्',
    'role_asset' => 'संपत्ति अनुमति',
    'roles_system_warning' => 'माथिका कुनै पनि तीन अनुमति प्रयोगकर्ताले आफैं वा अरूका अधिकार परिवर्तन गर्न सक्छन्। यी अनुमति भएको भूमिका मात्र भरपर्दो प्रयोगकर्तालाई दिनुहोस्।',
    'role_asset_desc' => 'यी अनुमतिले प्रणालीभित्र सम्पत्तिमा डिफल्ट पहुँच नियन्त्रण गर्छ। पुस्तक, अध्याय र पृष्ठमा अनुमति यी भन्दा प्राथमिक हुन्छ।',
    'role_asset_admins' => 'प्रशासनकर्ताहरूलाई सबै सामग्रीमा स्वतः पहुँच दिइन्छ, यी विकल्पहरूले UI मा देखिने वा लुकेका विकल्पहरू मात्र प्रभाव पार्न सक्छ।',
    'role_asset_image_view_note' => 'यो छवि व्यवस्थापक भित्रको दृश्यता सम्बन्धि हो। अपलोड गरिएको छविमा वास्तविक पहुँच प्रणालीको छवि भण्डारण विकल्प अनुसार हुन्छ।',
    'role_all' => 'सबै',
    'role_own' => 'आफ्नो',
    'role_controlled_by_asset' => 'अपलोड गरिएको सम्पत्तिले नियन्त्रण गरेको',
    'role_save' => 'भूमिका सुरक्षित गर्नुहोस्',
    'role_users' => 'यस भूमिकाका प्रयोगकर्ताहरू',
    'role_users_none' => 'यो भूमिकामा हाल कुनै प्रयोगकर्ता छैन',

    // Users
    'users' => 'प्रयोगकर्ताहरू',
    'users_index_desc' => 'प्रणालीमा व्यक्तिगत प्रयोगकर्ता खाता सिर्जना र व्यवस्थापन गर्नुहोस्। प्रयोगकर्ता खाता लगइन र सामग्री तथा गतिविधि जिम्मेवारीका लागि प्रयोग हुन्छ। पहुँच अनुमतिहरू मुख्यतया भूमिकामा आधारित छन् तर प्रयोगकर्ताको सामग्री स्वामित्वले पनि असर गर्न सक्छ।',
    'user_profile' => 'प्रयोगकर्ता प्रोफाइल',
    'users_add_new' => 'नयाँ प्रयोगकर्ता थप्नुहोस्',
    'users_search' => 'प्रयोगकर्ताहरू खोज्नुहोस्',
    'users_latest_activity' => 'हालैको गतिविधि',
    'users_details' => 'प्रयोगकर्ता विवरण',
    'users_details_desc' => 'यस प्रयोगकर्ताको प्रदर्शन नाम र इमेल ठेगाना सेट गर्नुहोस्। इमेल ठेगाना लगइनका लागि प्रयोग हुनेछ।',
    'users_details_desc_no_email' => 'यो प्रयोगकर्तालाई अरूले चिन्नेगरी प्रदर्शन नाम सेट गर्नुहोस्।',
    'users_role' => 'प्रयोगकर्ता भूमिका',
    'users_role_desc' => 'यो प्रयोगकर्तालाई दिइने भूमिका चयन गर्नुहोस्। प्रयोगकर्ताले धेरै भूमिका पाएमा सबै भूमिका अधिकारहरू जोडिनेछन्।',
    'users_password' => 'प्रयोगकर्ता पासवर्ड',
    'users_password_desc' => 'लगइनका लागि कम्तिमा ८ वर्ण लामो पासवर्ड सेट गर्नुहोस्।',
    'users_send_invite_text' => 'तपाईं यो प्रयोगकर्तालाई निमन्त्रणा इमेल पठाउन सक्नुहुन्छ जसले उनीहरूलाई आफ्नै पासवर्ड सेट गर्न अनुमति दिन्छ, नभए तपाईंले आफैं पासवर्ड सेट गर्न सक्नुहुन्छ।',
    'users_send_invite_option' => 'प्रयोगकर्तालाई निमन्त्रणा इमेल पठाउनुहोस्',
    'users_external_auth_id' => 'बाह्य प्रमाणीकरण ID',
    'users_external_auth_id_desc' => 'जब बाह्य प्रमाणीकरण प्रणाली प्रयोग हुन्छ (जस्तै SAML2, OIDC, LDAP), यो ID ले यो BookStack प्रयोगकर्तालाई सम्बन्धित प्रणाली खातासँग जोड्छ। सामान्य इमेल प्रमाणीकरणमा यो फिल्ड आवश्यक छैन।',
    'users_password_warning' => 'यो प्रयोगकर्ताको पासवर्ड परिवर्तन गर्न मात्र तल भर्नुहोस्।',
    'users_system_public' => 'यो प्रयोगकर्ता कुनै पनि पाहुना प्रयोगकर्तालाई प्रतिनिधित्व गर्दछ। यसले लगइन गर्न सक्दैन तर स्वतः दिइन्छ।',
    'users_delete' => 'प्रयोगकर्ता मेटाउनुहोस्',
    'users_delete_named' => ':userName प्रयोगकर्ता मेटाउनुहोस्',
    'users_delete_warning' => 'यसले \':userName\' नामको प्रयोगकर्तालाई प्रणालीबाट पूर्ण रूपमा मेटाउनेछ।',
    'users_delete_confirm' => 'के तपाईं पक्का यो प्रयोगकर्ता मेटाउन चाहनुहुन्छ?',
    'users_migrate_ownership' => 'स्वामित्व सार्नुहोस्',
    'users_migrate_ownership_desc' => 'यहाँ अर्को प्रयोगकर्ता चयन गर्नुहोस् जसले यस प्रयोगकर्ताका सबै वस्तुहरूको स्वामित्व पाओस्।',
    'users_none_selected' => 'कुनै प्रयोगकर्ता चयन गरिएको छैन',
    'users_edit' => 'प्रयोगकर्ता सम्पादन गर्नुहोस्',
    'users_edit_profile' => 'प्रोफाइल सम्पादन गर्नुहोस्',
    'users_avatar' => 'प्रयोगकर्ता अवतार',
    'users_avatar_desc' => 'यो प्रयोगकर्तालाई प्रतिनिधित्व गर्न एउटा चित्र चयन गर्नुहोस्। करिब २५६px वर्गाकार हुनु पर्छ।',
    'users_preferred_language' => 'रुचाइको भाषा',
    'users_preferred_language_desc' => 'यस विकल्पले एपको यूजर-इन्टरफेसको भाषा परिवर्तन गर्नेछ। प्रयोगकर्ताले सिर्जना गरेको सामग्रीमा असर पार्दैन।',
    'users_social_accounts' => 'सामाजिक खाता',
    'users_social_accounts_desc' => 'यो प्रयोगकर्ताका जडित सामाजिक खाताहरूको स्थिति हेर्नुहोस्। सामाजिक खाताहरू प्रमाणीकरणका लागि प्राथमिक प्रणालीसँगै प्रयोग गर्न सकिन्छ।',
    'users_social_accounts_info' => 'यहाँ तपाईं आफ्नो अन्य खाताहरू छिटो र सजिलो लगइनका लागि जोड्न सक्नुहुन्छ। यहाँबाट खाता डिस्कनेक्ट गर्दा पूर्व अनुमति रद्द हुँदैन। अनुमति रद्द गर्न सामाजिक खाताको सेटिङ प्रयोग गर्नुहोस्।',
    'users_social_connect' => 'खाता जडान गर्नुहोस्',
    'users_social_disconnect' => 'खाता डिस्कनेक्ट गर्नुहोस्',
    'users_social_status_connected' => 'जडान गरिएको',
    'users_social_status_disconnected' => 'डिस्कनेक्ट गरिएको',
    'users_social_connected' => ':socialAccount खाता सफलतापूर्वक प्रोफाइलमा जोडियो।',
    'users_social_disconnected' => ':socialAccount खाता सफलतापूर्वक प्रोफाइलबाट हटाइयो।',
    'users_api_tokens' => 'API टोकनहरू',
    'users_api_tokens_desc' => 'BookStack REST API सँग प्रमाणीकरण गर्न प्रयोग गरिने पहुँच टोकनहरू सिर्जना र व्यवस्थापन गर्नुहोस्। API अनुमतिहरू टोकनधारक प्रयोगकर्ताबाट व्यवस्थापन हुन्छ।',
    'users_api_tokens_none' => 'यस प्रयोगकर्ताका लागि कुनै API टोकन सिर्जना गरिएको छैन',
    'users_api_tokens_create' => 'टोकन सिर्जना गर्नुहोस्',
    'users_api_tokens_expires' => 'म्याद समाप्त',
    'users_api_tokens_docs' => 'API कागजातहरू',
    'users_mfa' => 'बहु-फ्याक्टर प्रमाणीकरण',
    'users_mfa_desc' => 'तपाईंको प्रयोगकर्ता खाताको लागि थप सुरक्षा तहको रूपमा बहु-फ्याक्टर प्रमाणीकरण सेटअप गर्नुहोस्।',
    'users_mfa_x_methods' => ':count विधि सेटअप गरिएको|:count विधिहरू सेटअप गरिएको',
    'users_mfa_configure' => 'विधिहरू सेटअप गर्नुहोस्',

    // API Tokens
    'user_api_token_create' => 'API टोकन सिर्जना गर्नुहोस्',
    'user_api_token_name' => 'नाम',
    'user_api_token_name_desc' => 'यो टोकनको उद्देश्य सम्झनको लागि भविष्यमा सम्झन सकिने नाम दिनुहोस्।',
    'user_api_token_expiry' => 'म्याद समाप्ति मिति',
    'user_api_token_expiry_desc' => 'यो टोकनको म्याद समाप्त हुने मिति सेट गर्नुहोस्। यस मितिपछि, यस टोकनको प्रयोग गरेर गरिएका अनुरोधहरू काम गर्दैनन्। यो फिल्ड खाली छोड्दा भविष्यमा १०० वर्षको म्याद सेट हुनेछ।',
    'user_api_token_create_secret_message' => 'यो टोकन सिर्जना गरेपछि "Token ID" र "Token Secret" जनरेट र प्रदर्शन गरिनेछ। यो गोप्य जानकारी एक पटक मात्र देखाइनेछ, त्यसैले कृपया यसलाई सुरक्षित स्थानमा प्रतिलिपि गर्नुहोस् र त्यसपछि मात्र अगाडि बढ्नुहोस्।',
    'user_api_token' => 'API टोकन',
    'user_api_token_id' => 'टोकन ID',
    'user_api_token_id_desc' => 'यो टोकनको लागि प्रणालीद्वारा उत्पन्न गरिएको अ-सम्पादनयोग्य पहिचान हो, जुन API अनुरोधहरूमा प्रदान गर्न आवश्यक हुनेछ।',
    'user_api_token_secret' => 'टोकन गोप्य जानकारी',
    'user_api_token_secret_desc' => 'यो टोकनको लागि प्रणालीद्वारा उत्पन्न गरिएको गोप्य जानकारी हो, जुन API अनुरोधहरूमा प्रदान गर्न आवश्यक हुनेछ। यसलाई केवल एक पटक मात्र देखाइनेछ, त्यसैले कृपया यसलाई सुरक्षित स्थानमा प्रतिलिपि गर्नुहोस्।',
    'user_api_token_created' => 'टोकन सिर्जना भएको :timeAgo',
    'user_api_token_updated' => 'टोकन अपडेट भएको :timeAgo',
    'user_api_token_delete' => 'टोकन मेटाउनुहोस्',
    'user_api_token_delete_warning' => 'यसले \':tokenName\' नामको API टोकनलाई पूर्ण रूपमा प्रणालीबाट मेटाउनेछ।',
    'user_api_token_delete_confirm' => 'के तपाईं पक्का यो API टोकन मेटाउन चाहनुहुन्छ?',

    // Webhooks
    'webhooks' => 'वेबहुक्स',
    'webhooks_index_desc' => 'वेबहुक्स भनेको प्रणाली भित्रका केही क्रियाकलाप र घटनाहरू हुँदा बाह्य URL हरूमा डेटा पठाउने विधि हो, जसले बाह्य प्लेटफर्महरूसँग जस्तै सन्देश वा सूचनासम्बन्धी सिस्टमहरूसँग घटनामा आधारित एकीकरणलाई अनुमति दिन्छ।',
    'webhooks_x_trigger_events' => ':count ट्रिगर घटना|:count ट्रिगर घटनाहरू',
    'webhooks_create' => 'नयाँ वेबहुक सिर्जना गर्नुहोस्',
    'webhooks_none_created' => 'अझै कुनै वेबहुक सिर्जना गरिएको छैन।',
    'webhooks_edit' => 'वेबहुक सम्पादन गर्नुहोस्',
    'webhooks_save' => 'वेबहुक बचत गर्नुहोस्',
    'webhooks_details' => 'वेबहुक विवरण',
    'webhooks_details_desc' => 'एक प्रयोगकर्ता मैत्री नाम र एक POST इन्डप्वाइंट दिनुहोस् जसलाई वेबहुकको डेटा पठाइने स्थानको रूपमा प्रयोग हुनेछ।',
    'webhooks_events' => 'वेबहुक घटनाहरू',
    'webhooks_events_desc' => 'यी घटनाहरू चयन गर्नुहोस् जसले यो वेबहुकलाई ट्रिगर गर्नुपर्नेछ।',
    'webhooks_events_warning' => 'ध्यान दिनुहोस् कि यी घटनाहरू चयन गरेपछि सबै चयन गरिएका घटनाहरूको लागि वेबहुक ट्रिगर हुनेछ, भले नै कस्टम अनुमतिहरू लागू गरिएका छन्। यो वेबहुक प्रयोग गर्दा गोपनीय सामग्रीको जोखिम नहोस् भन्ने कुरा सुनिश्चित गर्नुहोस्।',
    'webhooks_events_all' => 'सिस्टमका सबै घटनाहरू',
    'webhooks_name' => 'वेबहुक नाम',
    'webhooks_timeout' => 'वेबहुक अनुरोध म्याद समाप्ति (सेकेन्ड)',
    'webhooks_endpoint' => 'वेबहुक इन्डप्वाइंट',
    'webhooks_active' => 'वेबहुक सक्रिय',
    'webhook_events_table_header' => 'घटनाहरू',
    'webhooks_delete' => 'वेबहुक मेटाउनुहोस्',
    'webhooks_delete_warning' => 'यसले \':webhookName\' नामको वेबहुकलाई प्रणालीबाट पूर्ण रूपमा मेटाउनेछ।',
    'webhooks_delete_confirm' => 'के तपाईं पक्का यो वेबहुक मेटाउन चाहनुहुन्छ?',
    'webhooks_format_example' => 'वेबहुक ढाँचाको उदाहरण',
    'webhooks_format_example_desc' => 'वेबहुक डेटा POST अनुरोधको रूपमा JSON ढाँचामा निर्धारित इन्डप्वाइंटमा पठाइन्छ। "related_item" र "url" गुणहरू वैकल्पिक छन् र यो ट्रिगर गरिएको घटनाको प्रकारमा निर्भर गर्नेछ।',
    'webhooks_status' => 'वेबहुक स्थिति',
    'webhooks_last_called' => 'अन्तिम पटक कल गरिएको: ',
    'webhooks_last_errored' => 'अन्तिम पटक एरर भएको: ',
    'webhooks_last_error_message' => 'अन्तिम एरर सन्देश: ',

    // Licensing
    'licenses' => 'लाइसन्स',
    'licenses_desc' => 'यस पृष्ठमा BookStack को लाइसेन्स जानकारी र BookStack भित्र प्रयोग भएका परियोजना र पुस्तकालयहरूको जानकारी दिइएको छ। सूचीबद्ध भएका धेरै परियोजनाहरूले केवल विकासको सन्दर्भमा मात्र प्रयोग गर्न सकिन्छ।',
    'licenses_bookstack' => 'BookStack लाइसेन्स',
    'licenses_php' => 'PHP पुस्तकालय लाइसेन्स',
    'licenses_js' => 'JavaScript पुस्तकालय लाइसेन्स',
    'licenses_other' => 'अन्य लाइसेन्स',
    'license_details' => 'लाइसेन्स विवरण',

    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'cy' => 'Cymraeg',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'el' => 'ελληνικά',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fi' => 'Suomi',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nb' => 'Norsk (Bokmål)',
        'ne' => 'नेपाली',
        'nn' => 'Nynorsk',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ro' => 'Română',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'uz' => 'O‘zbekcha',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
