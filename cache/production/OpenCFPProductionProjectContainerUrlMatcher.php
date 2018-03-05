<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class OpenCFPProductionProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/admin')) {
            // admin
            if ('/admin' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_admin;
                }

                $ret = array (  '_controller' => 'OpenCFP\\Http\\Action\\Admin\\DashboardAction',  '_route' => 'admin',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'admin'));
                }

                return $ret;
            }
            not_admin:

            if (0 === strpos($pathinfo, '/admin/talks')) {
                // admin_talks
                if ('/admin/talks' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_talks;
                    }

                    return array (  '_controller' => 'OpenCFP\\Http\\Action\\Admin\\Talk\\IndexAction',  '_route' => 'admin_talks',);
                }
                not_admin_talks:

                // admin_talk_view
                if (preg_match('#^/admin/talks/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_talk_view;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_talk_view')), array (  '_controller' => 'OpenCFP\\Http\\Action\\Admin\\Talk\\ViewAction',));
                }
                not_admin_talk_view:

                // admin_talk_favorite
                if (preg_match('#^/admin/talks/(?P<id>[^/]++)/favorite$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_admin_talk_favorite;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_talk_favorite')), array (  '_controller' => 'OpenCFP\\Http\\Controller\\Admin\\TalksController::favoriteAction',));
                }
                not_admin_talk_favorite:

                // admin_talk_select
                if (preg_match('#^/admin/talks/(?P<id>[^/]++)/select$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_admin_talk_select;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_talk_select')), array (  '_controller' => 'OpenCFP\\Http\\Controller\\Admin\\TalksController::selectAction',));
                }
                not_admin_talk_select:

                // admin_talk_comment_create
                if (preg_match('#^/admin/talks/(?P<id>[^/]++)/comment$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_admin_talk_comment_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_talk_comment_create')), array (  '_controller' => 'OpenCFP\\Http\\Controller\\Admin\\TalksController::commentCreateAction',));
                }
                not_admin_talk_comment_create:

                // admin_talk_rate
                if (preg_match('#^/admin/talks/(?P<id>[^/]++)/rate$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_admin_talk_rate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_talk_rate')), array (  '_controller' => 'OpenCFP\\Http\\Action\\Admin\\Talk\\RateAction',));
                }
                not_admin_talk_rate:

            }

            elseif (0 === strpos($pathinfo, '/admin/speakers')) {
                // admin_speakers
                if ('/admin/speakers' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_speakers;
                    }

                    return array (  '_controller' => 'OpenCFP\\Http\\Controller\\Admin\\SpeakersController::indexAction',  '_route' => 'admin_speakers',);
                }
                not_admin_speakers:

                // admin_speaker_view
                if (preg_match('#^/admin/speakers/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_speaker_view;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_speaker_view')), array (  '_controller' => 'OpenCFP\\Http\\Controller\\Admin\\SpeakersController::viewAction',));
                }
                not_admin_speaker_view:

                // admin_speaker_promote
                if (preg_match('#^/admin/speakers/(?P<id>[^/]++)/promote$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_speaker_promote;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_speaker_promote')), array (  '_require_csrf_token' => true,  '_controller' => 'OpenCFP\\Http\\Action\\Admin\\Speaker\\PromoteAction',));
                }
                not_admin_speaker_promote:

                // admin_speaker_demote
                if (preg_match('#^/admin/speakers/(?P<id>[^/]++)/demote$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_speaker_demote;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_speaker_demote')), array (  '_require_csrf_token' => true,  '_controller' => 'OpenCFP\\Http\\Controller\\Admin\\SpeakersController::demoteAction',));
                }
                not_admin_speaker_demote:

                // admin_speaker_delete
                if (0 === strpos($pathinfo, '/admin/speakers/delete') && preg_match('#^/admin/speakers/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_speaker_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_speaker_delete')), array (  '_require_csrf_token' => true,  '_controller' => 'OpenCFP\\Http\\Controller\\Admin\\SpeakersController::deleteAction',));
                }
                not_admin_speaker_delete:

            }

            elseif (0 === strpos($pathinfo, '/admin/export/csv')) {
                // admin_export_csv
                if ('/admin/export/csv' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_export_csv;
                    }

                    return array (  '_controller' => 'OpenCFP\\Http\\Controller\\Admin\\ExportsController::attributedTalksExportAction',  '_route' => 'admin_export_csv',);
                }
                not_admin_export_csv:

                // admin_export_csv_anon
                if ('/admin/export/csv/anon' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_export_csv_anon;
                    }

                    return array (  '_controller' => 'OpenCFP\\Http\\Controller\\Admin\\ExportsController::anonymousTalksExportAction',  '_route' => 'admin_export_csv_anon',);
                }
                not_admin_export_csv_anon:

                // admin_export_csv_selected
                if ('/admin/export/csv/selected' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_export_csv_selected;
                    }

                    return array (  '_controller' => 'OpenCFP\\Http\\Controller\\Admin\\ExportsController::selectedTalksExportAction',  '_route' => 'admin_export_csv_selected',);
                }
                not_admin_export_csv_selected:

                // admin_export_csv_emails
                if ('/admin/export/csv/emails' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_admin_export_csv_emails;
                    }

                    return array (  '_controller' => 'OpenCFP\\Http\\Controller\\Admin\\ExportsController::emailExportAction',  '_route' => 'admin_export_csv_emails',);
                }
                not_admin_export_csv_emails:

            }

        }

        elseif (0 === strpos($pathinfo, '/reviewer')) {
            // reviewer
            if ('/reviewer' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_reviewer;
                }

                $ret = array (  '_controller' => 'OpenCFP\\Http\\Action\\Reviewer\\DashboardAction',  '_route' => 'reviewer',);
                if (substr($pathinfo, -1) !== '/') {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'reviewer'));
                }

                return $ret;
            }
            not_reviewer:

            if (0 === strpos($pathinfo, '/reviewer/talks')) {
                // reviewer_talks
                if ('/reviewer/talks' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_reviewer_talks;
                    }

                    return array (  '_controller' => 'OpenCFP\\Http\\Action\\Reviewer\\Talk\\IndexAction',  '_route' => 'reviewer_talks',);
                }
                not_reviewer_talks:

                // reviewer_talk_view
                if (preg_match('#^/reviewer/talks/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_reviewer_talk_view;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reviewer_talk_view')), array (  '_controller' => 'OpenCFP\\Http\\Action\\Reviewer\\Talk\\ViewAction',));
                }
                not_reviewer_talk_view:

                // reviewer_talk_rate
                if (preg_match('#^/reviewer/talks/(?P<id>[^/]++)/rate$#s', $pathinfo, $matches)) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_reviewer_talk_rate;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reviewer_talk_rate')), array (  '_controller' => 'OpenCFP\\Http\\Action\\Reviewer\\Talk\\RateAction',));
                }
                not_reviewer_talk_rate:

            }

            elseif (0 === strpos($pathinfo, '/reviewer/speakers')) {
                // reviewer_speakers
                if ('/reviewer/speakers' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_reviewer_speakers;
                    }

                    return array (  '_controller' => 'OpenCFP\\Http\\Action\\Reviewer\\Speaker\\IndexAction',  '_route' => 'reviewer_speakers',);
                }
                not_reviewer_speakers:

                // reviewer_speaker_view
                if (preg_match('#^/reviewer/speakers/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_reviewer_speaker_view;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'reviewer_speaker_view')), array (  '_controller' => 'OpenCFP\\Http\\Action\\Reviewer\\Speaker\\ViewAction',));
                }
                not_reviewer_speaker_view:

            }

        }

        elseif (0 === strpos($pathinfo, '/reset')) {
            // reset_password_create
            if ('/reset' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_reset_password_create;
                }

                return array (  '_controller' => 'OpenCFP\\Http\\Controller\\ForgotController::resetAction',  '_route' => 'reset_password_create',);
            }
            not_reset_password_create:

            // reset_password
            if (preg_match('#^/reset/(?P<user_id>[^/]++)/(?P<reset_code>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_reset_password;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'reset_password')), array (  '_controller' => 'OpenCFP\\Http\\Action\\Forgot\\ResetProcessAction',));
            }
            not_reset_password:

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_homepage;
            }

            $ret = array (  '_controller' => 'OpenCFP\\Http\\Action\\Page\\HomePageAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/p')) {
            // speaker_package
            if ('/package' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_speaker_package;
                }

                return array (  'template' => 'package.twig',  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  '_route' => 'speaker_package',);
            }
            not_speaker_package:

            if (0 === strpos($pathinfo, '/profile/edit')) {
                // user_edit
                if (preg_match('#^/profile/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_user_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'OpenCFP\\Http\\Controller\\ProfileController::editAction',));
                }
                not_user_edit:

                // user_update
                if ('/profile/edit' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_user_update;
                    }

                    return array (  '_controller' => 'OpenCFP\\Http\\Controller\\ProfileController::processAction',  '_route' => 'user_update',);
                }
                not_user_update:

            }

            elseif (0 === strpos($pathinfo, '/profile/change_password')) {
                // password_edit
                if ('/profile/change_password' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_password_edit;
                    }

                    return array (  'template' => 'user/change_password.twig',  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  '_route' => 'password_edit',);
                }
                not_password_edit:

                // password_change
                if ('/profile/change_password' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_password_change;
                    }

                    return array (  '_controller' => 'OpenCFP\\Http\\Action\\Profile\\ChangePasswordProcessAction',  '_route' => 'password_change',);
                }
                not_password_change:

            }

        }

        // talk_ideas
        if ('/ideas' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_talk_ideas;
            }

            return array (  'template' => 'ideas.twig',  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  '_route' => 'talk_ideas',);
        }
        not_talk_ideas:

        // coc
        if ('/coc' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_coc;
            }

            return array (  'template' => 'coc.twig',  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  '_route' => 'coc',);
        }
        not_coc:

        // dashboard
        if ('/dashboard' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_dashboard;
            }

            return array (  '_controller' => 'OpenCFP\\Http\\Action\\DashboardAction',  '_route' => 'dashboard',);
        }
        not_dashboard:

        if (0 === strpos($pathinfo, '/talk')) {
            // talk_edit
            if (0 === strpos($pathinfo, '/talk/edit') && preg_match('#^/talk/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_talk_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'talk_edit')), array (  '_require_csrf_token' => true,  '_controller' => 'OpenCFP\\Http\\Action\\Talk\\EditAction',));
            }
            not_talk_edit:

            if (0 === strpos($pathinfo, '/talk/create')) {
                // talk_new
                if ('/talk/create' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_talk_new;
                    }

                    return array (  '_controller' => 'OpenCFP\\Http\\Action\\Talk\\CreateAction',  '_route' => 'talk_new',);
                }
                not_talk_new:

                // talk_create
                if ('/talk/create' === $pathinfo) {
                    if ('POST' !== $canonicalMethod) {
                        $allow[] = 'POST';
                        goto not_talk_create;
                    }

                    return array (  '_require_csrf_token' => true,  '_controller' => 'OpenCFP\\Http\\Action\\Talk\\CreateProcessAction',  '_route' => 'talk_create',);
                }
                not_talk_create:

            }

            // talk_update
            if ('/talk/update' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_talk_update;
                }

                return array (  '_require_csrf_token' => true,  '_controller' => 'OpenCFP\\Http\\Action\\Talk\\UpdateAction',  '_route' => 'talk_update',);
            }
            not_talk_update:

            // talk_delete
            if ('/talk/delete' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_talk_delete;
                }

                return array (  '_require_csrf_token' => true,  '_controller' => 'OpenCFP\\Http\\Action\\Talk\\DeleteAction',  '_route' => 'talk_delete',);
            }
            not_talk_delete:

            // talk_view
            if (preg_match('#^/talk/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_talk_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'talk_view')), array (  '_controller' => 'OpenCFP\\Http\\Action\\Talk\\ViewAction',));
            }
            not_talk_view:

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_login;
                }

                return array (  'template' => 'security/login.twig',  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  '_route' => 'login',);
            }
            not_login:

            // login_check
            if ('/login' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_login_check;
                }

                return array (  '_controller' => 'OpenCFP\\Http\\Action\\Security\\LogInAction',  '_route' => 'login_check',);
            }
            not_login_check:

        }

        // logout
        if ('/logout' === $pathinfo) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_logout;
            }

            return array (  '_controller' => 'OpenCFP\\Http\\Action\\Security\\LogOutAction',  '_route' => 'logout',);
        }
        not_logout:

        if (0 === strpos($pathinfo, '/signup')) {
            // user_new
            if ('/signup' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_user_new;
                }

                return array (  '_controller' => 'OpenCFP\\Http\\Action\\Signup\\IndexAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_create
            if ('/signup' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'OpenCFP\\Http\\Action\\Signup\\ProcessAction',  '_route' => 'user_create',);
            }
            not_user_create:

        }

        elseif (0 === strpos($pathinfo, '/forgot')) {
            // forgot_password
            if ('/forgot' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_forgot_password;
                }

                return array (  '_controller' => 'OpenCFP\\Http\\Action\\Forgot\\IndexAction',  '_route' => 'forgot_password',);
            }
            not_forgot_password:

            // forgot_password_create
            if ('/forgot' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_forgot_password_create;
                }

                return array (  '_controller' => 'OpenCFP\\Http\\Controller\\ForgotController::sendResetAction',  '_route' => 'forgot_password_create',);
            }
            not_forgot_password_create:

        }

        // password_update
        if ('/updatepassword' === $pathinfo) {
            if ('POST' !== $canonicalMethod) {
                $allow[] = 'POST';
                goto not_password_update;
            }

            return array (  '_controller' => 'OpenCFP\\Http\\Action\\Forgot\\UpdatePasswordAction',  '_route' => 'password_update',);
        }
        not_password_update:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
