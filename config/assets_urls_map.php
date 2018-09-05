<?php

return [
    'require' => 'https://cdnjs.cloudflare.com/ajax/libs/require.js/2.3.5/require.js',
    'bookings_ui/dist/app.min.js' => 'https://unpkg.com/@rebelcode/bookings-js@0.1.26/dist/js/app.min',
    'bookings_ui/assets/main.js' => plugins_url(WP_BOOKINGS_UI_MODULE_RELATIVE_DIR.'/assets/main.js', EDDBK_FILE),
    'bookings_ui/dist/wp-booking-ui.css' => plugins_url(WP_BOOKINGS_UI_MODULE_RELATIVE_DIR.'/dist/wp-booking-ui.css', EDDBK_FILE),

    'cdn/fullcalendar.css' => 'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.0/fullcalendar.min.css',
];
