<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/css/ae50462')) {
            // _assetic_ae50462
            if ($pathinfo === '/css/ae50462.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae50462',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_ae50462',);
            }

            if (0 === strpos($pathinfo, '/css/ae50462_part_1_')) {
                if (0 === strpos($pathinfo, '/css/ae50462_part_1_bootstrap')) {
                    if (0 === strpos($pathinfo, '/css/ae50462_part_1_bootstrap-theme')) {
                        // _assetic_ae50462_0
                        if ($pathinfo === '/css/ae50462_part_1_bootstrap-theme_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae50462',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_ae50462_0',);
                        }

                        if (0 === strpos($pathinfo, '/css/ae50462_part_1_bootstrap-theme.')) {
                            // _assetic_ae50462_1
                            if ($pathinfo === '/css/ae50462_part_1_bootstrap-theme.css_2.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae50462',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_ae50462_1',);
                            }

                            // _assetic_ae50462_2
                            if ($pathinfo === '/css/ae50462_part_1_bootstrap-theme.min_3.css') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae50462',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_ae50462_2',);
                            }

                        }

                    }

                    // _assetic_ae50462_3
                    if ($pathinfo === '/css/ae50462_part_1_bootstrap_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae50462',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_ae50462_3',);
                    }

                    if (0 === strpos($pathinfo, '/css/ae50462_part_1_bootstrap.')) {
                        // _assetic_ae50462_4
                        if ($pathinfo === '/css/ae50462_part_1_bootstrap.css_5.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae50462',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_ae50462_4',);
                        }

                        // _assetic_ae50462_5
                        if ($pathinfo === '/css/ae50462_part_1_bootstrap.min_6.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae50462',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_ae50462_5',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/css/ae50462_part_1_font-awesome')) {
                    // _assetic_ae50462_6
                    if ($pathinfo === '/css/ae50462_part_1_font-awesome_7.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae50462',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_ae50462_6',);
                    }

                    // _assetic_ae50462_7
                    if ($pathinfo === '/css/ae50462_part_1_font-awesome.min_8.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae50462',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_ae50462_7',);
                    }

                }

                // _assetic_ae50462_8
                if ($pathinfo === '/css/ae50462_part_1_iconFont_9.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae50462',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_ae50462_8',);
                }

                // _assetic_ae50462_9
                if ($pathinfo === '/css/ae50462_part_1_jumbotron_10.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae50462',  'pos' => 9,  '_format' => 'css',  '_route' => '_assetic_ae50462_9',);
                }

                if (0 === strpos($pathinfo, '/css/ae50462_part_1_m')) {
                    // _assetic_ae50462_10
                    if ($pathinfo === '/css/ae50462_part_1_mainCSS_11.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae50462',  'pos' => 10,  '_format' => 'css',  '_route' => '_assetic_ae50462_10',);
                    }

                    // _assetic_ae50462_11
                    if ($pathinfo === '/css/ae50462_part_1_modal_12.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae50462',  'pos' => 11,  '_format' => 'css',  '_route' => '_assetic_ae50462_11',);
                    }

                }

                // _assetic_ae50462_12
                if ($pathinfo === '/css/ae50462_part_1_styles_13.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'ae50462',  'pos' => 12,  '_format' => 'css',  '_route' => '_assetic_ae50462_12',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/68c0127')) {
            // _assetic_68c0127
            if ($pathinfo === '/js/68c0127.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '68c0127',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_68c0127',);
            }

            if (0 === strpos($pathinfo, '/js/68c0127_part_1_')) {
                // _assetic_68c0127_0
                if ($pathinfo === '/js/68c0127_part_1_bootstrap.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '68c0127',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_68c0127_0',);
                }

                if (0 === strpos($pathinfo, '/js/68c0127_part_1_ie')) {
                    // _assetic_68c0127_1
                    if ($pathinfo === '/js/68c0127_part_1_ie-emulation-modes-warning_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '68c0127',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_68c0127_1',);
                    }

                    // _assetic_68c0127_2
                    if ($pathinfo === '/js/68c0127_part_1_ie10-viewport-bug-workaround_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '68c0127',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_68c0127_2',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/68c0127_part_1_jquery')) {
                    if (0 === strpos($pathinfo, '/js/68c0127_part_1_jquery-')) {
                        // _assetic_68c0127_3
                        if ($pathinfo === '/js/68c0127_part_1_jquery-animate-css-rotate-scale_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '68c0127',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_68c0127_3',);
                        }

                        // _assetic_68c0127_4
                        if ($pathinfo === '/js/68c0127_part_1_jquery-css-transform_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '68c0127',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_68c0127_4',);
                        }

                    }

                    // _assetic_68c0127_5
                    if ($pathinfo === '/js/68c0127_part_1_jquery.min_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '68c0127',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_68c0127_5',);
                    }

                }

                // _assetic_68c0127_6
                if ($pathinfo === '/js/68c0127_part_1_offcanvas_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '68c0127',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_68c0127_6',);
                }

                // _assetic_68c0127_7
                if ($pathinfo === '/js/68c0127_part_1_tab_8.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '68c0127',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_68c0127_7',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/images')) {
            if (0 === strpos($pathinfo, '/images/325c243')) {
                // _assetic_325c243
                if ($pathinfo === '/images/325c243') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '325c243',  'pos' => NULL,  '_route' => '_assetic_325c243',);
                }

                // _assetic_325c243_0
                if ($pathinfo === '/images/325c243_images_1') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '325c243',  'pos' => 0,  '_route' => '_assetic_325c243_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/5db3db5')) {
                // _assetic_5db3db5
                if ($pathinfo === '/images/5db3db5.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5db3db5',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_5db3db5',);
                }

                // _assetic_5db3db5_0
                if ($pathinfo === '/images/5db3db5_facebook-login_1.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '5db3db5',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_5db3db5_0',);
                }

            }

            if (0 === strpos($pathinfo, '/images/e1de3aa')) {
                // _assetic_e1de3aa
                if ($pathinfo === '/images/e1de3aa.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1de3aa',  'pos' => NULL,  '_format' => 'png',  '_route' => '_assetic_e1de3aa',);
                }

                // _assetic_e1de3aa_0
                if ($pathinfo === '/images/e1de3aa_twitter-login_1.png') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e1de3aa',  'pos' => 0,  '_format' => 'png',  '_route' => '_assetic_e1de3aa_0',);
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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // digix_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'digix_homepage');
            }

            return array (  '_controller' => 'DigixBundle\\Controller\\HomeController::displayAction',  '_route' => 'digix_homepage',);
        }

        // digix_wall
        if ($pathinfo === '/wall') {
            return array (  '_controller' => 'DigixBundle\\Controller\\WallController::displayWallAction',  '_route' => 'digix_wall',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // digix_loginCheck
            if ($pathinfo === '/logincheck') {
                return array (  '_controller' => 'DigixBundle\\Controller\\LoginController::checkLoginAction',  '_route' => 'digix_loginCheck',);
            }

            // digix_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'DigixBundle\\Controller\\LoginController::logoutAction',  '_route' => 'digix_logout',);
            }

        }

        // account_reg_check
        if ($pathinfo === '/registercheck') {
            return array (  '_controller' => 'DigixBundle\\Controller\\RegisterController::registerAction',  '_route' => 'account_reg_check',);
        }

        // second_default_controller
        if ($pathinfo === '/def2') {
            return array (  '_controller' => 'DigixBundle\\Controller\\SecondTestController::indexAction',  '_route' => 'second_default_controller',);
        }

        // facebook_login_controller
        if ($pathinfo === '/facebook-login') {
            return array (  '_controller' => 'DigixBundle\\Controller\\FacebookController::indexAction',  '_route' => 'facebook_login_controller',);
        }

        // twitter_login_controller
        if ($pathinfo === '/twitter-login') {
            return array (  '_controller' => 'DigixBundle\\Controller\\TwitterController::indexAction',  '_route' => 'twitter_login_controller',);
        }

        // google_login_controller
        if ($pathinfo === '/google-login') {
            return array (  '_controller' => 'DigixBundle\\Controller\\GooglePlusController::indexAction',  '_route' => 'google_login_controller',);
        }

        // flickr_login_controller
        if ($pathinfo === '/flickr-login') {
            return array (  '_controller' => 'DigixBundle\\Controller\\FlickrController::indexAction',  '_route' => 'flickr_login_controller',);
        }

        if (0 === strpos($pathinfo, '/m')) {
            // message_controller
            if ($pathinfo === '/message') {
                return array (  '_controller' => 'DigixBundle\\Controller\\MessageController::indexAction',  '_route' => 'message_controller',);
            }

            // display_modal_controller
            if ($pathinfo === '/modal') {
                return array (  '_controller' => 'DigixBundle\\Controller\\WallController::displayModalAction',  '_route' => 'display_modal_controller',);
            }

        }

        // tag_controller
        if ($pathinfo === '/tag') {
            return array (  '_controller' => 'DigixBundle\\Controller\\TagController::tagAction',  '_route' => 'tag_controller',);
        }

        if (0 === strpos($pathinfo, '/search')) {
            // search_controller
            if ($pathinfo === '/search') {
                return array (  '_controller' => 'DigixBundle\\Controller\\SearchController::displaySearchAction',  '_route' => 'search_controller',);
            }

            // search_action
            if ($pathinfo === '/search-action') {
                return array (  '_controller' => 'DigixBundle\\Controller\\SearchController::searchAction',  '_route' => 'search_action',);
            }

        }

        // about_page
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'DigixBundle\\Controller\\AboutPageController::displayAboutPageAction',  '_route' => 'about_page',);
        }

        // box_page
        if ($pathinfo === '/box') {
            return array (  '_controller' => 'DigixBundle\\Controller\\MyBoxController::displayMyBoxAction',  '_route' => 'box_page',);
        }

        if (0 === strpos($pathinfo, '/edit-profile')) {
            // edit_profile_page
            if ($pathinfo === '/edit-profile') {
                return array (  '_controller' => 'DigixBundle\\Controller\\ProfilePageController::displayProfileEditPageAction',  '_route' => 'edit_profile_page',);
            }

            // edit_profile_page_update
            if ($pathinfo === '/edit-profile-update') {
                return array (  '_controller' => 'DigixBundle\\Controller\\ProfilePageController::saveChangesAction',  '_route' => 'edit_profile_page_update',);
            }

        }

        if (0 === strpos($pathinfo, '/contact')) {
            // contact_page
            if ($pathinfo === '/contact') {
                return array (  '_controller' => 'DigixBundle\\Controller\\ContactPageController::displayContactPageAction',  '_route' => 'contact_page',);
            }

            // sendmail_page
            if ($pathinfo === '/contact-send') {
                return array (  '_controller' => 'DigixBundle\\Controller\\ContactPageController::sendmailAction',  '_route' => 'sendmail_page',);
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
