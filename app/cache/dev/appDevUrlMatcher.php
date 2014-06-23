<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/css/c28bae6')) {
            // _assetic_c28bae6
            if ($pathinfo === '/css/c28bae6.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'c28bae6',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_c28bae6',);
            }

            if (0 === strpos($pathinfo, '/css/c28bae6_part_1_')) {
                if (0 === strpos($pathinfo, '/css/c28bae6_part_1_bootstrap')) {
                    // _assetic_c28bae6_0
                    if ($pathinfo === '/css/c28bae6_part_1_bootstrap-responsive.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c28bae6',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_c28bae6_0',);
                    }

                    // _assetic_c28bae6_1
                    if ($pathinfo === '/css/c28bae6_part_1_bootstrap.min_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c28bae6',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_c28bae6_1',);
                    }

                }

                // _assetic_c28bae6_2
                if ($pathinfo === '/css/c28bae6_part_1_docs_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c28bae6',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_c28bae6_2',);
                }

                // _assetic_c28bae6_3
                if ($pathinfo === '/css/c28bae6_part_1_font-awesome.min_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c28bae6',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_c28bae6_3',);
                }

                if (0 === strpos($pathinfo, '/css/c28bae6_part_1_m')) {
                    if (0 === strpos($pathinfo, '/css/c28bae6_part_1_main_')) {
                        // _assetic_c28bae6_4
                        if ($pathinfo === '/css/c28bae6_part_1_main_5.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c28bae6',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_c28bae6_4',);
                        }

                        // _assetic_c28bae6_5
                        if ($pathinfo === '/css/c28bae6_part_1_main_6.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c28bae6',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_c28bae6_5',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/css/c28bae6_part_1_mixins_')) {
                        // _assetic_c28bae6_6
                        if ($pathinfo === '/css/c28bae6_part_1_mixins_7.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c28bae6',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_c28bae6_6',);
                        }

                        // _assetic_c28bae6_7
                        if ($pathinfo === '/css/c28bae6_part_1_mixins_8.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'c28bae6',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_c28bae6_7',);
                        }

                    }

                }

                // _assetic_c28bae6_8
                if ($pathinfo === '/css/c28bae6_part_1_prettify_9.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c28bae6',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_c28bae6_8',);
                }

                // _assetic_c28bae6_9
                if ($pathinfo === '/css/c28bae6_part_1_sl-slide_10.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'c28bae6',  'pos' => 9,  '_format' => 'css',  '_route' => '_assetic_c28bae6_9',);
                }

                if (0 === strpos($pathinfo, '/css/c28bae6_part_1_variables_1')) {
                    // _assetic_c28bae6_10
                    if ($pathinfo === '/css/c28bae6_part_1_variables_11.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c28bae6',  'pos' => 10,  '_format' => 'css',  '_route' => '_assetic_c28bae6_10',);
                    }

                    // _assetic_c28bae6_11
                    if ($pathinfo === '/css/c28bae6_part_1_variables_12.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'c28bae6',  'pos' => 11,  '_format' => 'css',  '_route' => '_assetic_c28bae6_11',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // welcome
        if (rtrim($pathinfo, '/') === '/home') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'welcome');
            }

            return array (  '_controller' => 'TW\\neloBundle\\Controller\\DefaultController::homeAction',  '_route' => 'welcome',);
        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'TW\\neloBundle\\Controller\\DefaultController::gohomeAction',  '_route' => 'home',);
        }

        if (0 === strpos($pathinfo, '/rooms')) {
            // rooms
            if (rtrim($pathinfo, '/') === '/rooms') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'rooms');
                }

                return array (  '_controller' => 'TW\\neloBundle\\Controller\\RoomsController::roomsAction',  '_route' => 'rooms',);
            }

            // booking
            if (0 === strpos($pathinfo, '/rooms/booking') && preg_match('#^/rooms/booking/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'booking')), array (  '_controller' => 'TW\\neloBundle\\Controller\\RoomsController::bookingAction',));
            }

        }

        // services
        if (rtrim($pathinfo, '/') === '/services') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'services');
            }

            return array (  '_controller' => 'TW\\neloBundle\\Controller\\ServicesController::servicesAction',  '_route' => 'services',);
        }

        // about_us
        if (rtrim($pathinfo, '/') === '/about') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'about_us');
            }

            return array (  '_controller' => 'TW\\neloBundle\\Controller\\AboutController::aboutAction',  '_route' => 'about_us',);
        }

        // location
        if (rtrim($pathinfo, '/') === '/location') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'location');
            }

            return array (  '_controller' => 'TW\\neloBundle\\Controller\\ContactController::locationAction',  '_route' => 'location',);
        }

        // FAQ
        if (rtrim($pathinfo, '/') === '/faq') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'FAQ');
            }

            return array (  '_controller' => 'TW\\neloBundle\\Controller\\UsefulController::faqAction',  '_route' => 'FAQ',);
        }

        // termsofuse
        if (rtrim($pathinfo, '/') === '/termsofuse') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'termsofuse');
            }

            return array (  '_controller' => 'TW\\neloBundle\\Controller\\UsefulController::termsAction',  '_route' => 'termsofuse',);
        }

        // policy
        if (rtrim($pathinfo, '/') === '/policy') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'policy');
            }

            return array (  '_controller' => 'TW\\neloBundle\\Controller\\UsefulController::policyAction',  '_route' => 'policy',);
        }

        // generalinfo
        if (rtrim($pathinfo, '/') === '/generalinfo') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'generalinfo');
            }

            return array (  '_controller' => 'TW\\neloBundle\\Controller\\UsefulController::generalinfoAction',  '_route' => 'generalinfo',);
        }

        // register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'TW\\neloBundle\\Controller\\SecurityController::registerAction',  '_route' => 'register',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'TW\\neloBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // add_rooms
            if (rtrim($pathinfo, '/') === '/admin/add/rooms') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'add_rooms');
                }

                return array (  '_controller' => 'TW\\neloBundle\\Controller\\RoomsController::addAction',  '_route' => 'add_rooms',);
            }

            // admin_page
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_page');
                }

                return array (  '_controller' => 'TW\\neloBundle\\Controller\\SecurityController::adminAction',  '_route' => 'admin_page',);
            }

            // manage_facilities
            if (rtrim($pathinfo, '/') === '/admin/facilities') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'manage_facilities');
                }

                return array (  '_controller' => 'TW\\neloBundle\\Controller\\RoomsController::manageFacilityAction',  '_route' => 'manage_facilities',);
            }

            // manage_types
            if (rtrim($pathinfo, '/') === '/admin/types') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'manage_types');
                }

                return array (  '_controller' => 'TW\\neloBundle\\Controller\\RoomsController::manageTypeAction',  '_route' => 'manage_types',);
            }

            if (0 === strpos($pathinfo, '/admin/rooms')) {
                // manage_rooms_add
                if ($pathinfo === '/admin/rooms/add') {
                    return array (  '_controller' => 'TW\\neloBundle\\Controller\\RoomsController::manageRoomAddAction',  '_route' => 'manage_rooms_add',);
                }

                // manage_rooms_delete
                if ($pathinfo === '/admin/rooms/delete') {
                    return array (  '_controller' => 'TW\\neloBundle\\Controller\\RoomsController::manageRoomDeleteAction',  '_route' => 'manage_rooms_delete',);
                }

            }

        }

        // form
        if (rtrim($pathinfo, '/') === '/form') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'form');
            }

            return array (  '_controller' => 'TW\\neloBundle\\Controller\\RoomsController::roomAction',  '_route' => 'form',);
        }

        // hello
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hello')), array (  '_controller' => 'Acme\\HelloBundle\\Controller\\HelloController::indexAction',));
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
