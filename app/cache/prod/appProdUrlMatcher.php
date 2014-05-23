<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/section')) {
            // section_show
            if (0 === strpos($pathinfo, '/section/show') && preg_match('#^/section/show/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'section_show')), array (  '_controller' => 'Salma\\SymCartBundle\\Controller\\SectionController::showAction',));
            }

            // section_list
            if ($pathinfo === '/section/list') {
                return array (  '_controller' => 'Salma\\SymCartBundle\\Controller\\SectionController::listAction',  '_route' => 'section_list',);
            }

        }

        // cart_index
        if ($pathinfo === '/mycart') {
            return array (  '_controller' => 'Salma\\SymCartBundle\\Controller\\CartController::indexAction',  '_route' => 'cart_index',);
        }

        if (0 === strpos($pathinfo, '/cart')) {
            // cart_add
            if (0 === strpos($pathinfo, '/cart/add') && preg_match('#^/cart/add/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cart_add;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cart_add')), array (  '_controller' => 'Salma\\SymCartBundle\\Controller\\CartController::addAction',));
            }
            not_cart_add:

            // cart_checkout
            if ($pathinfo === '/cart/checkout') {
                return array (  '_controller' => 'Salma\\SymCartBundle\\Controller\\CartController::checkoutAction',  '_route' => 'cart_checkout',);
            }

            // cart_empty
            if ($pathinfo === '/cart/empty') {
                return array (  '_controller' => 'Salma\\SymCartBundle\\Controller\\CartController::emptyAction',  '_route' => 'cart_empty',);
            }

            // cart_remv_item
            if (0 === strpos($pathinfo, '/cart/remvitem') && preg_match('#^/cart/remvitem/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cart_remv_item')), array (  '_controller' => 'Salma\\SymCartBundle\\Controller\\CartController::remvItemAction',));
            }

            // cart_change_quantity
            if ($pathinfo === '/cart/changeq') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_cart_change_quantity;
                }

                return array (  '_controller' => 'Salma\\SymCartBundle\\Controller\\CartController::changeItemQuantityAction',  '_route' => 'cart_change_quantity',);
            }
            not_cart_change_quantity:

        }

        // wishlist_index
        if ($pathinfo === '/mywishlist') {
            return array (  '_controller' => 'Salma\\SymCartBundle\\Controller\\WishlistController::indexAction',  '_route' => 'wishlist_index',);
        }

        if (0 === strpos($pathinfo, '/wishlist')) {
            // wishlist_add
            if (0 === strpos($pathinfo, '/wishlist/add') && preg_match('#^/wishlist/add/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wishlist_add')), array (  '_controller' => 'Salma\\SymCartBundle\\Controller\\WishlistController::addAction',));
            }

            // wishlist_empty
            if ($pathinfo === '/wishlist/empty') {
                return array (  '_controller' => 'Salma\\SymCartBundle\\Controller\\WishlistController::emptyAction',  '_route' => 'wishlist_empty',);
            }

            // wishlist_remv_item
            if (0 === strpos($pathinfo, '/wishlist/remvitem') && preg_match('#^/wishlist/remvitem/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'wishlist_remv_item')), array (  '_controller' => 'Salma\\SymCartBundle\\Controller\\WishlistController::remvItemAction',));
            }

        }

        // product_show
        if (0 === strpos($pathinfo, '/product') && preg_match('#^/product/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'product_show')), array (  '_controller' => 'Salma\\SymCartBundle\\Controller\\ProductController::showAction',));
        }

        if (0 === strpos($pathinfo, '/order')) {
            // order_list
            if ($pathinfo === '/order/list') {
                return array (  '_controller' => 'Salma\\SymCartBundle\\Controller\\OrdersController::listAction',  '_route' => 'order_list',);
            }

            // order_show
            if (0 === strpos($pathinfo, '/order/show') && preg_match('#^/order/show/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'order_show')), array (  '_controller' => 'Salma\\SymCartBundle\\Controller\\OrdersController::showAction',));
            }

        }

        // index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'index');
            }

            return array (  '_controller' => 'Salma\\SymCartBundle\\Controller\\PageController::indexAction',  '_route' => 'index',);
        }

        // about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'Salma\\SymCartBundle\\Controller\\PageController::aboutAction',  '_route' => 'about',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // sonata_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'sonata_user_security_login',);
                }

                // sonata_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_sonata_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'sonata_user_security_check',);
                }
                not_sonata_user_security_check:

            }

            // sonata_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'sonata_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            if (0 === strpos($pathinfo, '/resetting/re')) {
                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
                }
                not_fos_user_resetting_reset:

                // sonata_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_resetting_request;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'sonata_user_resetting_request',);
                }
                not_sonata_user_resetting_request:

            }

            // sonata_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sonata_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'sonata_user_resetting_send_email',);
            }
            not_sonata_user_resetting_send_email:

            // sonata_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_resetting_check_email',);
            }
            not_sonata_user_resetting_check_email:

            // sonata_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
            }
            not_sonata_user_resetting_reset:

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

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // fos_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'fos_user_profile_edit_authentication',);
                }

                // fos_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            // sonata_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_profile_show');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'sonata_user_profile_show',);
            }
            not_sonata_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // sonata_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'sonata_user_profile_edit_authentication',);
                }

                // sonata_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'sonata_user_profile_edit',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            // sonata_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'sonata_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // sonata_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_registration_check_email',);
                }
                not_sonata_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // sonata_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_sonata_user_registration_confirm:

                    // sonata_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'sonata_user_registration_confirmed',);
                    }
                    not_sonata_user_registration_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/profile/change-password')) {
            // fos_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

            // sonata_user_change_password
            if ($pathinfo === '/profile/change-password') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_change_password;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'sonata_user_change_password',);
            }
            not_sonata_user_change_password:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // sonata_user_admin_security_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                    }

                    // sonata_user_admin_security_check
                    if ($pathinfo === '/admin/login_check') {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                    }

                }

                // sonata_user_admin_security_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

            }

            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/s')) {
                // sonata_admin_search
                if ($pathinfo === '/admin/search') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
                }

                if (0 === strpos($pathinfo, '/admin/sonata/user')) {
                    if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                        // admin_sonata_user_user_list
                        if ($pathinfo === '/admin/sonata/user/user/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                        }

                        // admin_sonata_user_user_create
                        if ($pathinfo === '/admin/sonata/user/user/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                        }

                        // admin_sonata_user_user_batch
                        if ($pathinfo === '/admin/sonata/user/user/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                        }

                        // admin_sonata_user_user_edit
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                        }

                        // admin_sonata_user_user_delete
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                        }

                        // admin_sonata_user_user_show
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                        }

                        // admin_sonata_user_user_export
                        if ($pathinfo === '/admin/sonata/user/user/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                        }

                        // admin_sonata_user_user_acl
                        if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_acl')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_acl',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                        // admin_sonata_user_group_list
                        if ($pathinfo === '/admin/sonata/user/group/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                        }

                        // admin_sonata_user_group_create
                        if ($pathinfo === '/admin/sonata/user/group/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                        }

                        // admin_sonata_user_group_batch
                        if ($pathinfo === '/admin/sonata/user/group/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                        }

                        // admin_sonata_user_group_edit
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                        }

                        // admin_sonata_user_group_delete
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                        }

                        // admin_sonata_user_group_show
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                        }

                        // admin_sonata_user_group_export
                        if ($pathinfo === '/admin/sonata/user/group/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                        }

                        // admin_sonata_user_group_acl
                        if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_acl')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_acl',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/salma/symcart')) {
                    if (0 === strpos($pathinfo, '/admin/salma/symcart/section')) {
                        // admin_salma_symcart_section_list
                        if ($pathinfo === '/admin/salma/symcart/section/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'salma_sym_cart.admin.section',  '_sonata_name' => 'admin_salma_symcart_section_list',  '_route' => 'admin_salma_symcart_section_list',);
                        }

                        // admin_salma_symcart_section_create
                        if ($pathinfo === '/admin/salma/symcart/section/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'salma_sym_cart.admin.section',  '_sonata_name' => 'admin_salma_symcart_section_create',  '_route' => 'admin_salma_symcart_section_create',);
                        }

                        // admin_salma_symcart_section_batch
                        if ($pathinfo === '/admin/salma/symcart/section/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'salma_sym_cart.admin.section',  '_sonata_name' => 'admin_salma_symcart_section_batch',  '_route' => 'admin_salma_symcart_section_batch',);
                        }

                        // admin_salma_symcart_section_edit
                        if (preg_match('#^/admin/salma/symcart/section/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_section_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'salma_sym_cart.admin.section',  '_sonata_name' => 'admin_salma_symcart_section_edit',));
                        }

                        // admin_salma_symcart_section_delete
                        if (preg_match('#^/admin/salma/symcart/section/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_section_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'salma_sym_cart.admin.section',  '_sonata_name' => 'admin_salma_symcart_section_delete',));
                        }

                        // admin_salma_symcart_section_show
                        if (preg_match('#^/admin/salma/symcart/section/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_section_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'salma_sym_cart.admin.section',  '_sonata_name' => 'admin_salma_symcart_section_show',));
                        }

                        // admin_salma_symcart_section_export
                        if ($pathinfo === '/admin/salma/symcart/section/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'salma_sym_cart.admin.section',  '_sonata_name' => 'admin_salma_symcart_section_export',  '_route' => 'admin_salma_symcart_section_export',);
                        }

                        // admin_salma_symcart_section_acl
                        if (preg_match('#^/admin/salma/symcart/section/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_section_acl')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction',  '_sonata_admin' => 'salma_sym_cart.admin.section',  '_sonata_name' => 'admin_salma_symcart_section_acl',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/salma/symcart/orders')) {
                        // admin_salma_symcart_orders_list
                        if ($pathinfo === '/admin/salma/symcart/orders/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'salma_sym_cart.admin.orders',  '_sonata_name' => 'admin_salma_symcart_orders_list',  '_route' => 'admin_salma_symcart_orders_list',);
                        }

                        // admin_salma_symcart_orders_create
                        if ($pathinfo === '/admin/salma/symcart/orders/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'salma_sym_cart.admin.orders',  '_sonata_name' => 'admin_salma_symcart_orders_create',  '_route' => 'admin_salma_symcart_orders_create',);
                        }

                        // admin_salma_symcart_orders_batch
                        if ($pathinfo === '/admin/salma/symcart/orders/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'salma_sym_cart.admin.orders',  '_sonata_name' => 'admin_salma_symcart_orders_batch',  '_route' => 'admin_salma_symcart_orders_batch',);
                        }

                        // admin_salma_symcart_orders_edit
                        if (preg_match('#^/admin/salma/symcart/orders/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_orders_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'salma_sym_cart.admin.orders',  '_sonata_name' => 'admin_salma_symcart_orders_edit',));
                        }

                        // admin_salma_symcart_orders_delete
                        if (preg_match('#^/admin/salma/symcart/orders/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_orders_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'salma_sym_cart.admin.orders',  '_sonata_name' => 'admin_salma_symcart_orders_delete',));
                        }

                        // admin_salma_symcart_orders_show
                        if (preg_match('#^/admin/salma/symcart/orders/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_orders_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'salma_sym_cart.admin.orders',  '_sonata_name' => 'admin_salma_symcart_orders_show',));
                        }

                        // admin_salma_symcart_orders_export
                        if ($pathinfo === '/admin/salma/symcart/orders/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'salma_sym_cart.admin.orders',  '_sonata_name' => 'admin_salma_symcart_orders_export',  '_route' => 'admin_salma_symcart_orders_export',);
                        }

                        // admin_salma_symcart_orders_acl
                        if (preg_match('#^/admin/salma/symcart/orders/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_orders_acl')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction',  '_sonata_admin' => 'salma_sym_cart.admin.orders',  '_sonata_name' => 'admin_salma_symcart_orders_acl',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/salma/symcart/product')) {
                        // admin_salma_symcart_product_list
                        if ($pathinfo === '/admin/salma/symcart/product/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'salma_sym_cart.admin.product',  '_sonata_name' => 'admin_salma_symcart_product_list',  '_route' => 'admin_salma_symcart_product_list',);
                        }

                        // admin_salma_symcart_product_create
                        if ($pathinfo === '/admin/salma/symcart/product/create') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'salma_sym_cart.admin.product',  '_sonata_name' => 'admin_salma_symcart_product_create',  '_route' => 'admin_salma_symcart_product_create',);
                        }

                        // admin_salma_symcart_product_batch
                        if ($pathinfo === '/admin/salma/symcart/product/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'salma_sym_cart.admin.product',  '_sonata_name' => 'admin_salma_symcart_product_batch',  '_route' => 'admin_salma_symcart_product_batch',);
                        }

                        // admin_salma_symcart_product_edit
                        if (preg_match('#^/admin/salma/symcart/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_product_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'salma_sym_cart.admin.product',  '_sonata_name' => 'admin_salma_symcart_product_edit',));
                        }

                        // admin_salma_symcart_product_delete
                        if (preg_match('#^/admin/salma/symcart/product/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_product_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'salma_sym_cart.admin.product',  '_sonata_name' => 'admin_salma_symcart_product_delete',));
                        }

                        // admin_salma_symcart_product_show
                        if (preg_match('#^/admin/salma/symcart/product/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_product_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'salma_sym_cart.admin.product',  '_sonata_name' => 'admin_salma_symcart_product_show',));
                        }

                        // admin_salma_symcart_product_export
                        if ($pathinfo === '/admin/salma/symcart/product/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'salma_sym_cart.admin.product',  '_sonata_name' => 'admin_salma_symcart_product_export',  '_route' => 'admin_salma_symcart_product_export',);
                        }

                        // admin_salma_symcart_product_acl
                        if (preg_match('#^/admin/salma/symcart/product/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_product_acl')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction',  '_sonata_admin' => 'salma_sym_cart.admin.product',  '_sonata_name' => 'admin_salma_symcart_product_acl',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/salma/symcart/o')) {
                        if (0 === strpos($pathinfo, '/admin/salma/symcart/offer')) {
                            // admin_salma_symcart_offer_list
                            if ($pathinfo === '/admin/salma/symcart/offer/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'salma_sym_cart.admin.offer',  '_sonata_name' => 'admin_salma_symcart_offer_list',  '_route' => 'admin_salma_symcart_offer_list',);
                            }

                            // admin_salma_symcart_offer_create
                            if ($pathinfo === '/admin/salma/symcart/offer/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'salma_sym_cart.admin.offer',  '_sonata_name' => 'admin_salma_symcart_offer_create',  '_route' => 'admin_salma_symcart_offer_create',);
                            }

                            // admin_salma_symcart_offer_batch
                            if ($pathinfo === '/admin/salma/symcart/offer/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'salma_sym_cart.admin.offer',  '_sonata_name' => 'admin_salma_symcart_offer_batch',  '_route' => 'admin_salma_symcart_offer_batch',);
                            }

                            // admin_salma_symcart_offer_edit
                            if (preg_match('#^/admin/salma/symcart/offer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_offer_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'salma_sym_cart.admin.offer',  '_sonata_name' => 'admin_salma_symcart_offer_edit',));
                            }

                            // admin_salma_symcart_offer_delete
                            if (preg_match('#^/admin/salma/symcart/offer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_offer_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'salma_sym_cart.admin.offer',  '_sonata_name' => 'admin_salma_symcart_offer_delete',));
                            }

                            // admin_salma_symcart_offer_show
                            if (preg_match('#^/admin/salma/symcart/offer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_offer_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'salma_sym_cart.admin.offer',  '_sonata_name' => 'admin_salma_symcart_offer_show',));
                            }

                            // admin_salma_symcart_offer_export
                            if ($pathinfo === '/admin/salma/symcart/offer/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'salma_sym_cart.admin.offer',  '_sonata_name' => 'admin_salma_symcart_offer_export',  '_route' => 'admin_salma_symcart_offer_export',);
                            }

                            // admin_salma_symcart_offer_acl
                            if (preg_match('#^/admin/salma/symcart/offer/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_offer_acl')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction',  '_sonata_admin' => 'salma_sym_cart.admin.offer',  '_sonata_name' => 'admin_salma_symcart_offer_acl',));
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/salma/symcart/orderproducts')) {
                            // admin_salma_symcart_orderproducts_list
                            if ($pathinfo === '/admin/salma/symcart/orderproducts/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'salma_sym_cart.admin.order_products',  '_sonata_name' => 'admin_salma_symcart_orderproducts_list',  '_route' => 'admin_salma_symcart_orderproducts_list',);
                            }

                            // admin_salma_symcart_orderproducts_create
                            if ($pathinfo === '/admin/salma/symcart/orderproducts/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'salma_sym_cart.admin.order_products',  '_sonata_name' => 'admin_salma_symcart_orderproducts_create',  '_route' => 'admin_salma_symcart_orderproducts_create',);
                            }

                            // admin_salma_symcart_orderproducts_batch
                            if ($pathinfo === '/admin/salma/symcart/orderproducts/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'salma_sym_cart.admin.order_products',  '_sonata_name' => 'admin_salma_symcart_orderproducts_batch',  '_route' => 'admin_salma_symcart_orderproducts_batch',);
                            }

                            // admin_salma_symcart_orderproducts_edit
                            if (preg_match('#^/admin/salma/symcart/orderproducts/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_orderproducts_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'salma_sym_cart.admin.order_products',  '_sonata_name' => 'admin_salma_symcart_orderproducts_edit',));
                            }

                            // admin_salma_symcart_orderproducts_delete
                            if (preg_match('#^/admin/salma/symcart/orderproducts/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_orderproducts_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'salma_sym_cart.admin.order_products',  '_sonata_name' => 'admin_salma_symcart_orderproducts_delete',));
                            }

                            // admin_salma_symcart_orderproducts_show
                            if (preg_match('#^/admin/salma/symcart/orderproducts/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_orderproducts_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'salma_sym_cart.admin.order_products',  '_sonata_name' => 'admin_salma_symcart_orderproducts_show',));
                            }

                            // admin_salma_symcart_orderproducts_export
                            if ($pathinfo === '/admin/salma/symcart/orderproducts/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'salma_sym_cart.admin.order_products',  '_sonata_name' => 'admin_salma_symcart_orderproducts_export',  '_route' => 'admin_salma_symcart_orderproducts_export',);
                            }

                            // admin_salma_symcart_orderproducts_acl
                            if (preg_match('#^/admin/salma/symcart/orderproducts/(?P<id>[^/]++)/acl$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_salma_symcart_orderproducts_acl')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::aclAction',  '_sonata_admin' => 'salma_sym_cart.admin.order_products',  '_sonata_name' => 'admin_salma_symcart_orderproducts_acl',));
                            }

                        }

                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
