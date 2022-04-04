// obtain plugin
var cc = initCookieConsent();

// run plugin with your configuration
cc.run({
    current_lang: 'en',
    autoclear_cookies: true,                   // default: false
    page_scripts: true,                        // default: false

    mode: 'opt-in',                          // default: 'opt-in'; value: 'opt-in' or 'opt-out'
    delay: 0,                               // default: 0
    auto_language: null,                     // default: null; could also be 'browser' or 'document'
    autorun: true,                          // default: true
    force_consent: false,                   // default: false
    hide_from_bots: false,                  // default: false
    remove_cookie_tables: false,             // default: false
    // cookie_name: 'cc_cookie',               // default: 'cc_cookie'
    cookie_expiration: 183,                 // default: 182 (days)
    cookie_necessary_only_expiration: 182,   // default: disabled
    // cookie_domain: location.hostname,       // default: current domain
    // cookie_path: '/',                       // default: root
    // cookie_same_site: 'Lax',                // default: 'Lax'
    // use_rfc_cookie: false,                  // default: false
    revision: 1,                            // default: 0

    onFirstAction: function(user_preferences, cookie){
        // callback triggered only once
    },

    onAccept: function (cookie) {
        // ...
    },

    onChange: function (cookie, changed_preferences) {
        // ...
    },

    languages: {
        'en': {
            consent_modal: {
                title: 'We use cookies!',
                description: 'Hi, this website uses cookies to ensure its proper operation and prevent spam. <button type="button" data-cc="c-settings" class="cc-link">Let me choose</button>',
                primary_btn: {
                    text: 'Accept all',
                    role: 'accept_all'              // 'accept_selected' or 'accept_all'
                },
                secondary_btn: {
                    text: 'Reject all',
                    role: 'accept_necessary'        // 'settings' or 'accept_necessary'
                }
            },
            settings_modal: {
                title: 'Cookie preferences',
                save_settings_btn: 'Save settings',
                accept_all_btn: 'Accept all',
                reject_all_btn: 'Reject all',
                close_btn_label: 'Close',
                cookie_table_headers: [
                    {col1: 'Name'},
                    {col2: 'Domain'},
                    {col3: 'Expiration'},
                    {col4: 'Description'}
                ],
                blocks: [
                    {
                        title: 'Cookie usage 📢',
                        description: 'We only use cookies to ensure the basic functionalities of the website and prevent bot spam. You can choose for each category to opt-in/out whenever you want.'
                    }, 
                     {
                        title: 'Analytics cookies',
                        description: 'These cookies are used for the purposes of spam prevention on our contact page.',
                        toggle: {
                            value: 'analytics',     // your cookie category
                            enabled: false,
                            readonly: false
                        },
                        cookie_table: [             // list of all expected cookies
                            {
                                col1: '_GRECAPTCHA',       
                                col2: 'google.com',
                                col3: '2 years',
                                col4: 'Executed for the purposes of providing its risk analysis. ',
                                is_regex: true
                            },
                        ]
                    }
                ]
            }
        }
    }
});