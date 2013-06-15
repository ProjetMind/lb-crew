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

        if (0 === strpos($pathinfo, '/')) {
            // _assetic_bootstrap_css
            if ($pathinfo === '/css/bootstrap.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
            }

            // _assetic_bootstrap_css_0
            if ($pathinfo === '/css/bootstrap_bootstrap_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => '0',  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
            }

            // _assetic_bootstrap_css_1
            if ($pathinfo === '/css/bootstrap_responsive_2.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => '1',  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_1',);
            }

            // _assetic_bootstrap_js
            if ($pathinfo === '/js/bootstrap.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
            }

            // _assetic_bootstrap_js_0
            if ($pathinfo === '/js/bootstrap_bootstrap-transition_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => '0',  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
            }

            // _assetic_bootstrap_js_1
            if ($pathinfo === '/js/bootstrap_bootstrap-alert_2.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => '1',  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_1',);
            }

            // _assetic_bootstrap_js_2
            if ($pathinfo === '/js/bootstrap_bootstrap-button_3.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => '2',  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_2',);
            }

            // _assetic_bootstrap_js_3
            if ($pathinfo === '/js/bootstrap_bootstrap-carousel_4.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => '3',  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_3',);
            }

            // _assetic_bootstrap_js_4
            if ($pathinfo === '/js/bootstrap_bootstrap-collapse_5.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => '4',  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_4',);
            }

            // _assetic_bootstrap_js_5
            if ($pathinfo === '/js/bootstrap_bootstrap-dropdown_6.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => '5',  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_5',);
            }

            // _assetic_bootstrap_js_6
            if ($pathinfo === '/js/bootstrap_bootstrap-modal_7.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => '6',  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_6',);
            }

            // _assetic_bootstrap_js_7
            if ($pathinfo === '/js/bootstrap_bootstrap-tooltip_8.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => '7',  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_7',);
            }

            // _assetic_bootstrap_js_8
            if ($pathinfo === '/js/bootstrap_bootstrap-popover_9.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => '8',  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_8',);
            }

            // _assetic_bootstrap_js_9
            if ($pathinfo === '/js/bootstrap_bootstrap-scrollspy_10.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => '9',  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_9',);
            }

            // _assetic_bootstrap_js_10
            if ($pathinfo === '/js/bootstrap_bootstrap-tab_11.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => '10',  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_10',);
            }

            // _assetic_bootstrap_js_11
            if ($pathinfo === '/js/bootstrap_bootstrap-typeahead_12.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => '11',  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_11',);
            }

            // _assetic_bootstrap_js_12
            if ($pathinfo === '/js/bootstrap_bootstrap-affix_13.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => '12',  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_12',);
            }

            // _assetic_7ec7567
            if ($pathinfo === '/css/bootstrap.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7ec7567',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_7ec7567',);
            }

            // _assetic_7ec7567_0
            if ($pathinfo === '/css/bootstrap_bootstrap_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7ec7567',  'pos' => '0',  '_format' => 'css',  '_route' => '_assetic_7ec7567_0',);
            }

            // _assetic_7ec7567_1
            if ($pathinfo === '/css/bootstrap_responsive_2.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7ec7567',  'pos' => '1',  '_format' => 'css',  '_route' => '_assetic_7ec7567_1',);
            }

            // _assetic_7ec7567_2
            if ($pathinfo === '/css/bootstrap_part_3_mediaStyle_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7ec7567',  'pos' => '2',  '_format' => 'css',  '_route' => '_assetic_7ec7567_2',);
            }

            // _assetic_7ec7567_3
            if ($pathinfo === '/css/bootstrap_part_4_corpsStyle_1.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7ec7567',  'pos' => '3',  '_format' => 'css',  '_route' => '_assetic_7ec7567_3',);
            }

            // _assetic_7ec7567_4
            if ($pathinfo === '/css/bootstrap_part_4_headerStyle_2.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7ec7567',  'pos' => '4',  '_format' => 'css',  '_route' => '_assetic_7ec7567_4',);
            }

            // _assetic_7ec7567_5
            if ($pathinfo === '/css/bootstrap_part_4_menuDGStyle_3.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7ec7567',  'pos' => '5',  '_format' => 'css',  '_route' => '_assetic_7ec7567_5',);
            }

            // _assetic_7ec7567_6
            if ($pathinfo === '/css/bootstrap_part_4_modalbox_4.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7ec7567',  'pos' => '6',  '_format' => 'css',  '_route' => '_assetic_7ec7567_6',);
            }

            // _assetic_7ec7567_7
            if ($pathinfo === '/css/bootstrap_part_4_styleBase_5.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7ec7567',  'pos' => '7',  '_format' => 'css',  '_route' => '_assetic_7ec7567_7',);
            }

            // _assetic_b186120
            if ($pathinfo === '/js/bootstrap.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b186120',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_b186120',);
            }

            // _assetic_b186120_0
            if ($pathinfo === '/js/bootstrap_jquery.min_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b186120',  'pos' => '0',  '_format' => 'js',  '_route' => '_assetic_b186120_0',);
            }

            // _assetic_b186120_1
            if ($pathinfo === '/js/bootstrap_part_2_bootstrap-affix_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b186120',  'pos' => '1',  '_format' => 'js',  '_route' => '_assetic_b186120_1',);
            }

            // _assetic_b186120_2
            if ($pathinfo === '/js/bootstrap_part_2_bootstrap-alert_2.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b186120',  'pos' => '2',  '_format' => 'js',  '_route' => '_assetic_b186120_2',);
            }

            // _assetic_b186120_3
            if ($pathinfo === '/js/bootstrap_part_2_bootstrap-button_3.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b186120',  'pos' => '3',  '_format' => 'js',  '_route' => '_assetic_b186120_3',);
            }

            // _assetic_b186120_4
            if ($pathinfo === '/js/bootstrap_part_2_bootstrap-carousel_4.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b186120',  'pos' => '4',  '_format' => 'js',  '_route' => '_assetic_b186120_4',);
            }

            // _assetic_b186120_5
            if ($pathinfo === '/js/bootstrap_part_2_bootstrap-collapse_5.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b186120',  'pos' => '5',  '_format' => 'js',  '_route' => '_assetic_b186120_5',);
            }

            // _assetic_b186120_6
            if ($pathinfo === '/js/bootstrap_part_2_bootstrap-dropdown_6.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b186120',  'pos' => '6',  '_format' => 'js',  '_route' => '_assetic_b186120_6',);
            }

            // _assetic_b186120_7
            if ($pathinfo === '/js/bootstrap_part_2_bootstrap-modal_7.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b186120',  'pos' => '7',  '_format' => 'js',  '_route' => '_assetic_b186120_7',);
            }

            // _assetic_b186120_8
            if ($pathinfo === '/js/bootstrap_part_2_bootstrap-popover_8.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b186120',  'pos' => '8',  '_format' => 'js',  '_route' => '_assetic_b186120_8',);
            }

            // _assetic_b186120_9
            if ($pathinfo === '/js/bootstrap_part_2_bootstrap-scrollspy_9.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b186120',  'pos' => '9',  '_format' => 'js',  '_route' => '_assetic_b186120_9',);
            }

            // _assetic_b186120_10
            if ($pathinfo === '/js/bootstrap_part_2_bootstrap-tab_10.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b186120',  'pos' => '10',  '_format' => 'js',  '_route' => '_assetic_b186120_10',);
            }

            // _assetic_b186120_11
            if ($pathinfo === '/js/bootstrap_part_2_bootstrap-tooltip_11.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b186120',  'pos' => '11',  '_format' => 'js',  '_route' => '_assetic_b186120_11',);
            }

            // _assetic_b186120_12
            if ($pathinfo === '/js/bootstrap_part_2_bootstrap-transition_12.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b186120',  'pos' => '12',  '_format' => 'js',  '_route' => '_assetic_b186120_12',);
            }

            // _assetic_b186120_13
            if ($pathinfo === '/js/bootstrap_part_2_bootstrap-typeahead_13.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'b186120',  'pos' => '13',  '_format' => 'js',  '_route' => '_assetic_b186120_13',);
            }

        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // l_bcrew_bootstrap_extension_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'LBcrew\\BootstrapExtensionBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'l_bcrew_bootstrap_extension_homepage'));
        }

        // lbcrew_commentaires_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'LBcrew\\CommentairesBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'lbcrew_commentaires_default_index'));
        }

        // l_bcrew_messages_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'LBcrew\\MessagesBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'l_bcrew_messages_homepage'));
        }

        if (0 === strpos($pathinfo, '/')) {
            // ajouter_video
            if ($pathinfo === '/video/ajouter-une-video') {
                return array (  '_controller' => 'LBcrew\\MediaBundle\\Controller\\VideoController::ajouterVideoAction',  '_route' => 'ajouter_video',);
            }

            // liste_video
            if ($pathinfo === '/video/liste-des-videos') {
                return array (  '_controller' => 'LBcrew\\MediaBundle\\Controller\\VideoController::listeVideoAction',  '_route' => 'liste_video',);
            }

        }

        // lb_crew_racine
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'lb_crew_racine');
            }

            return array (  '_controller' => 'LBcrew\\SiteBundle\\Controller\\SiteController::indexAction',  '_route' => 'lb_crew_racine',);
        }

        if (0 === strpos($pathinfo, '/')) {
            // fos_user_security_login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
            }

            // fos_user_security_check
            if ($pathinfo === '/login_check') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            // fos_user_registration_check_email
            if ($pathinfo === '/register/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            // fos_user_registration_confirm
            if (0 === strpos($pathinfo, '/register/confirm') && preg_match('#^/register/confirm/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirm;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',)), array('_route' => 'fos_user_registration_confirm'));
            }
            not_fos_user_registration_confirm:

            // fos_user_registration_confirmed
            if ($pathinfo === '/register/confirmed') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_registration_confirmed;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
            }
            not_fos_user_registration_confirmed:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',)), array('_route' => 'fos_user_resetting_reset'));
            }
            not_fos_user_resetting_reset:

        }

        // fos_user_change_password
        if ($pathinfo === '/change-password/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
