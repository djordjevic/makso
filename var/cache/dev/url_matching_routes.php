<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/lista-akcija' => [[['_route' => 'app_admin_actions_list', '_controller' => 'App\\Controller\\AdminActionController::listActions'], null, null, null, false, false, null]],
        '/admin/nova-akcija' => [[['_route' => 'app_admin_new_action', '_controller' => 'App\\Controller\\AdminActionController::newAction'], null, null, null, false, false, null]],
        '/admin/lista-atributa' => [[['_route' => 'app_admin_attributes_list', '_controller' => 'App\\Controller\\AdminAttributeController::listAttributes'], null, null, null, false, false, null]],
        '/admin/lista-kategorija' => [[['_route' => 'app_admin_categories_list', '_controller' => 'App\\Controller\\AdminCategoryController::listCategories'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/lista-dobavljaca' => [[['_route' => 'app_admin_vendors_list', '_controller' => 'App\\Controller\\AdminDobavljacController::listVendors'], null, null, null, false, false, null]],
        '/admin/lista-porudzbina' => [[['_route' => 'app_admin_orders_list', '_controller' => 'App\\Controller\\AdminOrderController::listOrders'], null, null, null, false, false, null]],
        '/admin/lista-proizvoda' => [[['_route' => 'app_admin_products_list', '_controller' => 'App\\Controller\\AdminProductController::listProducts'], null, null, null, false, false, null]],
        '/admin/lista-ocena' => [[['_route' => 'app_admin_review_list', '_controller' => 'App\\Controller\\AdminReviewController::listComments'], null, null, null, false, false, null]],
        '/admin/lista-upita' => [[['_route' => 'app_admin_reservation_list', '_controller' => 'App\\Controller\\AdminRezervacijaController::listReservations'], null, null, null, false, false, null]],
        '/admin/lista-firmi' => [[['_route' => 'app_admin_companies_list', '_controller' => 'App\\Controller\\AdminUserController::listFirme'], null, null, null, false, false, null]],
        '/admin/lista-korisnika' => [[['_route' => 'app_admin_users_list', '_controller' => 'App\\Controller\\AdminUserController::listKorisnici'], null, null, null, false, false, null]],
        '/admin/lista-gazdinstava' => [[['_route' => 'app_admin_gazdinstva_list', '_controller' => 'App\\Controller\\AdminUserController::listGazdinstva'], null, null, null, false, false, null]],
        '/prijava' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthController::login'], null, null, null, false, false, null]],
        '/odjava' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthController::logout'], null, null, null, false, false, null]],
        '/firma' => [[['_route' => 'app_firma', '_controller' => 'App\\Controller\\FirmaController::index'], null, null, null, false, false, null]],
        '/firma/izmeni' => [[['_route' => 'app_firma_edit', '_controller' => 'App\\Controller\\FirmaController::editFirma'], null, null, null, true, false, null]],
        '/firma/izmeni-lozinku' => [[['_route' => 'app_firma_edit_password', '_controller' => 'App\\Controller\\FirmaController::editPassword'], null, null, null, true, false, null]],
        '/gazdinstvo' => [[['_route' => 'app_gazdinstvo', '_controller' => 'App\\Controller\\GazdinstvoController::index'], null, null, null, false, false, null]],
        '/gazdinstvo/izmeni' => [[['_route' => 'app_gazdinstvo_edit', '_controller' => 'App\\Controller\\GazdinstvoController::edit'], null, null, null, true, false, null]],
        '/gazdinstvo/izmeni-lozinku' => [[['_route' => 'app_gazdinstvo_edit_password', '_controller' => 'App\\Controller\\GazdinstvoController::editPassword'], null, null, null, true, false, null]],
        '/' => [[['_route' => 'pocetna', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/kontakt' => [[['_route' => 'kontakt', '_controller' => 'App\\Controller\\PageController::kontakt'], null, null, null, false, false, null]],
        '/kontakt/form' => [[['_route' => 'kontakt_email', '_controller' => 'App\\Controller\\PageController::contactForm'], null, null, null, true, false, null]],
        '/o-nama' => [[['_route' => 'o-nama', '_controller' => 'App\\Controller\\PageController::oNama'], null, null, null, false, false, null]],
        '/galerija' => [[['_route' => 'galerija', '_controller' => 'App\\Controller\\PageController::galerija'], null, null, null, false, false, null]],
        '/nacini-dostave' => [[['_route' => 'nacini-dostave', '_controller' => 'App\\Controller\\PageController::naciniDostave'], null, null, null, false, false, null]],
        '/nacini-placanja' => [[['_route' => 'nacini-placanja', '_controller' => 'App\\Controller\\PageController::naciniPlacanja'], null, null, null, false, false, null]],
        '/uslovi-koriscenja' => [[['_route' => 'uslovi-koriscenja', '_controller' => 'App\\Controller\\PageController::usloviKoriscenje'], null, null, null, false, false, null]],
        '/politika-privatnosti' => [[['_route' => 'politika-privatnosti', '_controller' => 'App\\Controller\\PageController::politikaPrivatnosti'], null, null, null, false, false, null]],
        '/reklamacije' => [[['_route' => 'reklamacije', '_controller' => 'App\\Controller\\PageController::reklamacije'], null, null, null, false, false, null]],
        '/zastita-podatka' => [[['_route' => 'zastita-podataka', '_controller' => 'App\\Controller\\PageController::zastitaPodataka'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'app_profil', '_controller' => 'App\\Controller\\ProfilController::index'], null, null, null, false, false, null]],
        '/profil/izmeni' => [[['_route' => 'app_profil_edit', '_controller' => 'App\\Controller\\ProfilController::editUser'], null, null, null, true, false, null]],
        '/profil/izmeni-lozinku' => [[['_route' => 'app_profil_edit_password', '_controller' => 'App\\Controller\\ProfilController::editPassword'], null, null, null, true, false, null]],
        '/registracija' => [[['_route' => 'izbor_registracije', '_controller' => 'App\\Controller\\RegistrationController::registrationModel'], null, null, null, false, false, null]],
        '/registracija-gazdinstvo' => [[['_route' => 'reg_gazdinstvo', '_controller' => 'App\\Controller\\RegistrationController::registrationGazdinstvo'], null, null, null, false, false, null]],
        '/registracija-pravno-lice' => [[['_route' => 'reg_firma', '_controller' => 'App\\Controller\\RegistrationController::registrationFirma'], null, null, null, false, false, null]],
        '/registracija-fizicko-lice' => [[['_route' => 'reg_fizicko', '_controller' => 'App\\Controller\\RegistrationController::registrationFizicko'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/prodavnica/prikolice' => [[['_route' => 'prodavnica_prikolica', '_controller' => 'App\\Controller\\ShopController::prikolicaList'], null, null, null, false, false, null]],
        '/prodavnica/traktori' => [[['_route' => 'prodavnica_traktor', '_controller' => 'App\\Controller\\ShopController::traktorList'], null, null, null, false, false, null]],
        '/prodavnica/kuke' => [[['_route' => 'prodavnica_kuka', '_controller' => 'App\\Controller\\ShopController::kukeList'], null, null, null, false, false, null]],
        '/prodavnica/izdavanje' => [[['_route' => 'prodavnica_izdavanje', '_controller' => 'App\\Controller\\ShopController::izdavanje'], null, null, null, false, false, null]],
        '/korpa' => [[['_route' => 'korpa', '_controller' => 'App\\Controller\\ShopController::cartList'], null, null, null, false, false, null]],
        '/korpa/dodaj' => [[['_route' => 'korpa_dodaj', '_controller' => 'App\\Controller\\ShopController::basketAdd'], null, null, null, false, false, null]],
        '/korpa/preracun' => [[['_route' => 'korpa_preracunaj', '_controller' => 'App\\Controller\\ShopController::basketPreracun'], null, null, null, true, false, null]],
        '/kasa' => [[['_route' => 'kasa', '_controller' => 'App\\Controller\\ShopController::checkout'], null, null, null, false, false, null]],
        '/subscribe' => [[['_route' => 'app_subscribe', '_controller' => 'App\\Controller\\SubscribeController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|nov(?'
                        .'|i\\-(?'
                            .'|atribut(?:/([^/]++))?(*:50)'
                            .'|dobavljac(?:/([^/]++))?(*:80)'
                            .'|proizvod(?:/([^/]++))?(*:109)'
                            .'|korisnik(?:/([^/]++))?(*:139)'
                        .')'
                        .'|a\\-(?'
                            .'|kategorija(?:/([^/]++))?(*:178)'
                            .'|firma(?:/([^/]++))?(*:205)'
                        .')'
                        .'|o\\-gazdinstvo(?:/([^/]++))?(*:241)'
                    .')'
                    .'|obrisi\\-(?'
                        .'|atribut(?:/([^/]++))?(*:282)'
                        .'|k(?'
                            .'|ategoriju(?:/([^/]++))?(*:317)'
                            .'|orisnika(?:/([^/]++))?(*:347)'
                        .')'
                        .'|dobavljaca(?:/([^/]++))?(*:380)'
                        .'|p(?'
                            .'|orudzbinu(?:/([^/]++))?(*:415)'
                            .'|roizvod(?:/([^/]++))?(*:444)'
                        .')'
                        .'|firmu(?:/([^/]++))?(*:472)'
                        .'|gazdinstvo/([^/]++)(*:499)'
                    .')'
                    .'|vidi\\-(?'
                        .'|atribut(?:/([^/]++))?(*:538)'
                        .'|k(?'
                            .'|ategoriju(?:/([^/]++))?(*:573)'
                            .'|o(?'
                                .'|mentar(?:/([^/]++))?(*:605)'
                                .'|risnika(?:/([^/]++))?(*:634)'
                            .')'
                        .')'
                        .'|dobavljaca(?:/([^/]++))?(*:668)'
                        .'|proizvod(?:/([^/]++))?(*:698)'
                        .'|upit(?:/([^/]++))?(*:724)'
                        .'|firmu(?:/([^/]++))?(*:751)'
                        .'|gazdinstvo/([^/]++)(*:778)'
                    .')'
                    .'|pr(?'
                        .'|egled\\-porudzbine(?:/([^/]++))?(*:823)'
                        .'|int/pregled\\-porudzbine/([^/]++)(*:863)'
                    .')'
                    .'|izmeni\\-status\\-porudzbine(?:/([^/]++))?(*:912)'
                    .'|status\\-komentara(?:/([^/]++))?(*:951)'
                .')'
                .'|/firma/pregled\\-porudzbine(?:/([^/]++))?(*:1000)'
                .'|/gazdinstvo/pregled\\-porudzbine/([^/]++)(*:1049)'
                .'|/pr(?'
                    .'|o(?'
                        .'|fil/pregled\\-porudzbine(?:/([^/]++))?(*:1105)'
                        .'|izvod/(?'
                            .'|([^/]++)(*:1131)'
                            .'|form/([^/]++)(*:1153)'
                        .')'
                    .')'
                    .'|etraga/rezultati/([^/]++)(*:1189)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:1235)'
                .'|/korpa/delete/([^/]++)(*:1266)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1306)'
                    .'|wdt/([^/]++)(*:1327)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1374)'
                            .'|router(*:1389)'
                            .'|exception(?'
                                .'|(*:1410)'
                                .'|\\.css(*:1424)'
                            .')'
                        .')'
                        .'|(*:1435)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        50 => [[['_route' => 'app_admin_new_attribute', 'id' => 0, '_controller' => 'App\\Controller\\AdminAttributeController::newAttribute'], ['id'], null, null, false, true, null]],
        80 => [[['_route' => 'app_admin_new_vendor', 'id' => 0, '_controller' => 'App\\Controller\\AdminDobavljacController::newVendor'], ['id'], null, null, false, true, null]],
        109 => [[['_route' => 'app_admin_new_product', 'id' => 0, '_controller' => 'App\\Controller\\AdminProductController::newProduct'], ['id'], null, null, false, true, null]],
        139 => [[['_route' => 'app_admin_new_user', 'id' => 0, '_controller' => 'App\\Controller\\AdminUserController::noviKorisnik'], ['id'], null, null, false, true, null]],
        178 => [[['_route' => 'app_admin_new_category', 'id' => 0, '_controller' => 'App\\Controller\\AdminCategoryController::newCategory'], ['id'], null, null, false, true, null]],
        205 => [[['_route' => 'app_admin_new_company', 'id' => 0, '_controller' => 'App\\Controller\\AdminUserController::novaFirma'], ['id'], null, null, false, true, null]],
        241 => [[['_route' => 'app_admin_new_gazdinstvo', 'id' => 0, '_controller' => 'App\\Controller\\AdminUserController::novoGazdinstvo'], ['id'], null, null, false, true, null]],
        282 => [[['_route' => 'app_admin_delete_attribute', 'id' => 0, '_controller' => 'App\\Controller\\AdminAttributeController::deleteAttribute'], ['id'], null, null, false, true, null]],
        317 => [[['_route' => 'app_admin_delete_category', 'id' => 0, '_controller' => 'App\\Controller\\AdminCategoryController::deleteCategory'], ['id'], null, null, false, true, null]],
        347 => [[['_route' => 'app_admin_delete_user', 'id' => 0, '_controller' => 'App\\Controller\\AdminUserController::deleteUser'], ['id'], null, null, false, true, null]],
        380 => [[['_route' => 'app_admin_delete_vendor', 'id' => 0, '_controller' => 'App\\Controller\\AdminDobavljacController::deleteVendor'], ['id'], null, null, false, true, null]],
        415 => [[['_route' => 'app_admin_delete_order', 'id' => 0, '_controller' => 'App\\Controller\\AdminOrderController::deleteOrder'], ['id'], null, null, false, true, null]],
        444 => [[['_route' => 'app_admin_delete_product', 'id' => 0, '_controller' => 'App\\Controller\\AdminProductController::deleteProduct'], ['id'], null, null, false, true, null]],
        472 => [[['_route' => 'app_admin_delete_company', 'id' => 0, '_controller' => 'App\\Controller\\AdminUserController::deleteCompany'], ['id'], null, null, false, true, null]],
        499 => [[['_route' => 'app_admin_delete_gazdinstvo', '_controller' => 'App\\Controller\\AdminUserController::deleteGazdinstvo'], ['id'], null, null, false, true, null]],
        538 => [[['_route' => 'app_admin_view_attribute', 'id' => 0, '_controller' => 'App\\Controller\\AdminAttributeController::viewAttribute'], ['id'], null, null, false, true, null]],
        573 => [[['_route' => 'app_admin_view_category', 'id' => 0, '_controller' => 'App\\Controller\\AdminCategoryController::viewCategory'], ['id'], null, null, false, true, null]],
        605 => [[['_route' => 'app_admin_view_review', 'id' => 0, '_controller' => 'App\\Controller\\AdminReviewController::viewReview'], ['id'], null, null, false, true, null]],
        634 => [[['_route' => 'app_admin_view_user', 'id' => 0, '_controller' => 'App\\Controller\\AdminUserController::viewUser'], ['id'], null, null, false, true, null]],
        668 => [[['_route' => 'app_admin_view_vendor', 'id' => 0, '_controller' => 'App\\Controller\\AdminDobavljacController::viewVendor'], ['id'], null, null, false, true, null]],
        698 => [[['_route' => 'app_admin_view_product', 'id' => 0, '_controller' => 'App\\Controller\\AdminProductController::viewProduct'], ['id'], null, null, false, true, null]],
        724 => [[['_route' => 'app_admin_view_reservation', 'id' => 0, '_controller' => 'App\\Controller\\AdminRezervacijaController::viewReservations'], ['id'], null, null, false, true, null]],
        751 => [[['_route' => 'app_admin_view_company', 'id' => 0, '_controller' => 'App\\Controller\\AdminUserController::viewCompany'], ['id'], null, null, false, true, null]],
        778 => [[['_route' => 'app_admin_view_gazdinstvo', '_controller' => 'App\\Controller\\AdminUserController::viewGazdinstvo'], ['id'], null, null, false, true, null]],
        823 => [[['_route' => 'app_admin_order_view', 'id' => 0, '_controller' => 'App\\Controller\\AdminOrderController::viewOrder'], ['id'], null, null, false, true, null]],
        863 => [[['_route' => 'app_admin_order_view_pdf', '_controller' => 'App\\Controller\\AdminOrderController::viewOrderPdf'], ['id'], null, null, false, true, null]],
        912 => [[['_route' => 'app_admin_change_status', 'id' => 0, '_controller' => 'App\\Controller\\AdminOrderController::statusOrder'], ['id'], null, null, false, true, null]],
        951 => [[['_route' => 'app_admin_status_review', 'id' => 0, '_controller' => 'App\\Controller\\AdminReviewController::deleteReview'], ['id'], null, null, false, true, null]],
        1000 => [[['_route' => 'app_firma_order_view', 'id' => 0, '_controller' => 'App\\Controller\\FirmaController::viewFirmaOrder'], ['id'], null, null, false, true, null]],
        1049 => [[['_route' => 'app_gazdinstvo_order_view', '_controller' => 'App\\Controller\\GazdinstvoController::viewOrder'], ['id'], null, null, false, true, null]],
        1105 => [[['_route' => 'app_profil_order_view', 'id' => 0, '_controller' => 'App\\Controller\\ProfilController::viewProfilOrder'], ['id'], null, null, false, true, null]],
        1131 => [[['_route' => 'proizvod', '_controller' => 'App\\Controller\\ShopController::product'], ['id'], null, null, true, true, null]],
        1153 => [[['_route' => 'proizvod_komentar', 'id' => 0, '_controller' => 'App\\Controller\\ShopController::komentarForm'], ['id'], null, null, true, true, null]],
        1189 => [[['_route' => 'pretraga', 'page' => '1', '_controller' => 'App\\Controller\\ShopController::pretraga'], ['page'], null, null, true, true, null]],
        1235 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1266 => [[['_route' => 'korpa_ukloni', '_controller' => 'App\\Controller\\ShopController::basketDelete'], ['id'], null, null, true, true, null]],
        1306 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1327 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1374 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1389 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1410 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1424 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1435 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
