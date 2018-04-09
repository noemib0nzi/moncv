<?php

/* @App/default/index.html.twig */
class __TwigTemplate_30e20a622b22884a3967f8e1220353b9c1e774d3cbe419356a0213ab3ad8d6a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "@App/default/index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9db692a123d84687bd8a48c404e7d6cb976ab519bc11f903993b693a590c32bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db692a123d84687bd8a48c404e7d6cb976ab519bc11f903993b693a590c32bd->enter($__internal_9db692a123d84687bd8a48c404e7d6cb976ab519bc11f903993b693a590c32bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $__internal_2ddd99241dd97fc867c4046e3902225e9fa74ac059ac6957b94ca64ab682c826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ddd99241dd97fc867c4046e3902225e9fa74ac059ac6957b94ca64ab682c826->enter($__internal_2ddd99241dd97fc867c4046e3902225e9fa74ac059ac6957b94ca64ab682c826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9db692a123d84687bd8a48c404e7d6cb976ab519bc11f903993b693a590c32bd->leave($__internal_9db692a123d84687bd8a48c404e7d6cb976ab519bc11f903993b693a590c32bd_prof);

        
        $__internal_2ddd99241dd97fc867c4046e3902225e9fa74ac059ac6957b94ca64ab682c826->leave($__internal_2ddd99241dd97fc867c4046e3902225e9fa74ac059ac6957b94ca64ab682c826_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_92852481900df1784a05ab0c606afe749cd553f6bda0422cb0558e0837f53c30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92852481900df1784a05ab0c606afe749cd553f6bda0422cb0558e0837f53c30->enter($__internal_92852481900df1784a05ab0c606afe749cd553f6bda0422cb0558e0837f53c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88d043d07fa92f8e2ea719ef615bccf5d9146fd628b5647262d4fb94bdc2db35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d043d07fa92f8e2ea719ef615bccf5d9146fd628b5647262d4fb94bdc2db35->enter($__internal_88d043d07fa92f8e2ea719ef615bccf5d9146fd628b5647262d4fb94bdc2db35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <!-- header
    ================================================== -->
    <header class=\"s-header\">

        <div class=\"header-logo\">
            <a class=\"site-logo\" href=\"index.html\"><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/images/logo.png"), "html", null, true);
        echo "\" alt=\"Homepage\"></a>
        </div>

        <nav class=\"header-nav-wrap\">
            <ul class=\"header-nav\">
                <li class=\"current\"><a class=\"smoothscroll\"  href=\"#home\" title=\"home\">Accueil</a></li>
                <li><a class=\"smoothscroll\"  href=\"#formations\" title=\"formations\">Formations</a></li>
                <li><a class=\"smoothscroll\"  href=\"#experiences\" title=\"experiences\">Expériences</a></li>
                <li><a class=\"smoothscroll\"  href=\"#competences\" title=\"competences\">Compétences</a></li>
                <li><a class=\"smoothscroll\"  href=\"#loisirs\" title=\"loisirs\">Loisirs</a></li>
                <li><a class=\"smoothscroll\"  href=\"#contact\" title=\"contact\">Contact</a></li>
            </ul>
        </nav>

        <a class=\"header-menu-toggle\" href=\"#0\"><span>Menu</span></a>

    </header> <!-- end s-header -->


   <!-- home
   ================================================== -->
   <section id=\"home\" class=\"s-home page-hero target-section\" data-parallax=\"scroll\" data-image-src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/images/hero-bg.jpg"), "html", null, true);
        echo "\"  data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class=\"overlay\"></div>
        <div class=\"shadow-overlay\"></div>

        <div class=\"home-content\">

            <div class=\"row home-content__main\">

                <h3>Bienvenus</h3>

                <h1>
                    ";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["firstname"]) ? $context["firstname"] : $this->getContext($context, "firstname")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo ". <br>
                    Chargée de communication <br>
                    et graphiste, Grenoble.
                </h1>

                <div class=\"home-content__buttons\">
                    <a href=\"#formations\" class=\"smoothscroll btn btn--stroke\">
                        Projets
                    </a>
                    <a href=\"#experiences\" class=\"smoothscroll btn btn--stroke\">
                        Informations
                    </a>
                </div>

                <div class=\"home-content__scroll\">
                    <a href=\"#experiences\" class=\"scroll-link smoothscroll\">
                        <span>Scroll Down</span>
                    </a>
                </div>

            </div>

        </div> <!-- end home-content -->

        <ul class=\"home-social\">
            <li>
                <a href=\"#\"><i class=\"im im-facebook\" aria-hidden=\"true\"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href=\"#\"><i class=\"im im-twitter\" aria-hidden=\"true\"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href=\"#\"><i class=\"im im-instagram\" aria-hidden=\"true\"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href=\"#\"><i class=\"im im-behance\" aria-hidden=\"true\"></i><span>Behance</span></a>
            </li>
            <li>
                <a href=\"#\"><i class=\"im im-pinterest\" aria-hidden=\"true\"></i><span>Pinterest</span></a>
            </li>
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- formations
    ================================================== -->
    <section id=\"formations\" class=\"s-formations target-section\">
        
        <div class=\"row narrow section-intro has-bottom-sep\">
            <div class=\"col-full text-center\">
                <br>
                <br>
                <br>
                <h3>Formations</h3>
            </div>
        </div>


        <div class=\"row formations-content formations-content--timeline\">

            <div class=\"col-full text-center\">
                <h3>Mon parcours</h3>
            </div>

            <div class=\"col-six tab-full left\">
                <div class=\"timeline\">
                    
                    ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 114
            echo "                        <div class=\"timeline__block\">
                            <div class=\"timeline__bullet\"></div>
                            <div class=\"timeline__header\">
                                <p class=\"timeline__timeframe\">";
            // line 117
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["formation"], "getDateDebut", array(), "method"), "Y-m-d"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["formation"], "getDateFin", array(), "method"), "Y-m-d"), "html", null, true);
            echo "</p>
                                <h3>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "getName", array(), "method"), "html", null, true);
            echo "</h3>
                                <h5>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "getLieu", array(), "method"), "html", null, true);
            echo "</h5>
                            </div>
                            <div class=\"timeline__desc\">
                                <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                            </div>
                        </div> <!-- end timeline__block -->
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "
                    

                    

                </div> <!-- end timeline -->
            </div> <!-- end right -->

        </div> <!-- end formations-content timeline -->

    </section> <!-- end formations -->
    

    <!-- experiences
    ================================================== -->
    <section id=\"experiences\" class=\"s-experiences target-section\">

        <div class=\"row narrow section-intro has-bottom-sep\">
            <div class=\"col-full\">
                <br>
                <br>
                <br>
                <h3>Expériences</h3>
                <h1>Mes derniers travaux</h1>
                
                <p class=\"lead\">Lorem ipsum Dolor adipisicing nostrud et aute Excepteur amet commodo ea dolore irure esse Duis nulla sint fugiat cillum ullamco proident aliquip quis qui voluptate dolore veniam Ut laborum non est in officia.</p>
            </div>
        </div>

        <div class=\"row masonry-wrap\">
            <div class=\"masonry\">

                <div class=\"masonry__brick\">
                    <div class=\"item-folio\">

                        <div class=\"item-folio__thumb\">
                            <a href=\"images/portfolio/gallery/g-beetle.jpg\" class=\"thumb-link\" title=\"The Beetle Car\" data-size=\"1050x700\">
                                <img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/images/portfolio/beetle.jpg"), "html", null, true);
        echo "\" 
                                     srcset=\"/web/template/images/portfolio/beetle.jpg 1x, /web/template/images/portfolio/beetle@2x.jpg 2x\" alt=\"\">
                                <span class=\"shadow-overlay\"></span>
                            </a>
                        </div>

                        <div class=\"item-folio__text\">
                            <h3 class=\"item-folio__title\">
                                The Beetle
                            </h3>
                            <p class=\"item-folio__cat\">
                                Web Development
                            </p>
                        </div>

                        <a href=\"https://www.behance.net/\" class=\"item-folio__project-link\" title=\"Project link\">
                            <i class=\"im im-link\"></i>
                        </a>

                        <div class=\"item-folio__caption\">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class=\"masonry__brick\">
                    <div class=\"item-folio\">

                        <div class=\"item-folio__thumb\"> 
                            <a href=\"images/portfolio/gallery/g-lighthouse.jpg\" class=\"thumb-link\" title=\"Lighthouse\" data-size=\"1050x700\">
                                <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/images/portfolio/lighthouse.jpg"), "html", null, true);
        echo "\" 
                                     srcset=\"/web/template/images/portfolio/lighthouse.jpg 1x, /web/template/images/portfolio/lighthouse@2x.jpg 2x\" alt=\"\">
                                <span class=\"shadow-overlay\"></span>
                            </a>
                        </div>

                        <div class=\"item-folio__text\">
                            <h3 class=\"item-folio__title\">
                                Lighthouse
                            </h3>
                            <p class=\"item-folio__cat\">
                                Web Design
                            </p>
                        </div>

                        <a href=\"https://www.behance.net/\" class=\"item-folio__project-link\" title=\"Project link\">
                            <i class=\"im im-link\"></i>
                        </a>

                        <div class=\"item-folio__caption\">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class=\"masonry__brick\">
                    <div class=\"item-folio\">

                        <div class=\"item-folio__thumb\">
                            <a href=\"images/portfolio/gallery/g-salad.jpg\" class=\"thumb-link\" data-size=\"1050x700\">
                                <img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/images/portfolio/salad.jpg"), "html", null, true);
        echo "\" 
                                     srcset=\"/web/template/images/portfolio/salad.jpg 1x, /web/template/images/portfolio/salad@2x.jpg 2x\" alt=\"\">
                                <span class=\"shadow-overlay\"></span>
                            </a>
                        </div>

                        <div class=\"item-folio__text\">
                            <h3 class=\"item-folio__title\">
                                Salad
                            </h3>
                            <p class=\"item-folio__cat\">
                                Branding
                            </p>
                        </div>

                        <a href=\"https://www.behance.net/\" class=\"item-folio__project-link\" title=\"Project link\">
                            <i class=\"im im-link\"></i>
                        </a>

                        <span class=\"item-folio__caption\">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class=\"masonry__brick\">
                    <div class=\"item-folio\">

                        <div class=\"item-folio__thumb\">
                            <a href=\"images/portfolio/gallery/g-woodcraft.jpg\" class=\"thumb-link\" data-size=\"1050x700\">
                                <img src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/images/portfolio/woodcraft.jpg"), "html", null, true);
        echo "\"
                                     srcset=\"/web/template/images/portfolio/woodcraft.jpg 1x, /web/template/images/portfolio/woodcraft@2x.jpg 2x\" alt=\"\">
                                <span class=\"shadow-overlay\"></span>
                            </a>
                        </div>

                        <div class=\"item-folio__text\">
                            <h3 class=\"item-folio__title\">
                                Woodcraft
                            </h3>
                            <p class=\"item-folio__cat\">
                                Branding
                            </p>
                        </div>

                        <a href=\"https://www.behance.net/\" class=\"item-folio__project-link\" title=\"Project link\">
                            <i class=\"im im-link\"></i>
                        </a>

                        <span class=\"item-folio__caption\">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class=\"masonry__brick\">
                    <div class=\"item-folio\">

                        <div class=\"item-folio__thumb\">
                            <a href=\"images/portfolio/gallery/g-skaterboy.jpg\" class=\"thumb-link\" data-size=\"1050x700\">
                                <img src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/images/portfolio/skaterboy.jpg"), "html", null, true);
        echo "\"
                                     srcset=\"/web/template/images/portfolio/skaterboy.jpg 1x, /web/template/images/portfolio/skaterboy@2x.jpg 2x\" alt=\"\">
                                <span class=\"shadow-overlay\"></span>
                            </a>
                        </div>

                        <div class=\"item-folio__text\">
                            <h3 class=\"item-folio__title\">
                                Skaterboy
                            </h3>
                            <p class=\"item-folio__cat\">
                                Web Development
                            </p>
                        </div>

                        <a href=\"https://www.behance.net/\" class=\"item-folio__project-link\" title=\"Project link\">
                            <i class=\"im im-link\"></i>
                        </a>

                        <span class=\"item-folio__caption\">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class=\"masonry__brick\">
                    <div class=\"item-folio\">

                        <div class=\"item-folio__thumb\">
                            <a href=\"images/portfolio/gallery/g-liberty.jpg\" class=\"thumb-link\" data-size=\"1050x700\">
                                <img src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/images/portfolio/liberty.jpg"), "html", null, true);
        echo "\"
                                     srcset=\"/web/template/images/portfolio/liberty.jpg 1x, /web/template/images/portfolio/liberty@2x.jpg 2x\" alt=\"\">
                                <span class=\"shadow-overlay\"></span>
                            </a>
                        </div>

                        <div class=\"item-folio__text\">
                            <h3 class=\"item-folio__title\">
                                Liberty
                            </h3>
                            <p class=\"item-folio__cat\">
                                Branding
                            </p>
                        </div>

                        <a href=\"https://www.behance.net/\" class=\"item-folio__project-link\" title=\"Project link\">
                            <i class=\"im im-link\"></i>
                        </a>

                        <span class=\"item-folio__caption\">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class=\"masonry__brick\">
                    <div class=\"item-folio\">

                        <div class=\"item-folio__thumb\">
                            <a href=\"images/portfolio/gallery/g-minimalismo.jpg\" class=\"thumb-link\" data-size=\"1050x700\">
                                <img src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/images/portfolio/minimalismo.jpg"), "html", null, true);
        echo "\"
                                     srcset=\"/web/template/images/portfolio/minimalismo.jpg 1x, /web/template/images/portfolio/minimalismo@2x.jpg 2x\" alt=\"\">
                                <span class=\"shadow-overlay\"></span>
                            </a>
                        </div>

                        <div class=\"item-folio__text\">
                            <h3 class=\"item-folio__title\">
                                Minimalismo
                            </h3>
                            <p class=\"item-folio__cat\">
                                Web Design
                            </p>
                        </div>

                        <a href=\"https://www.behance.net/\" class=\"item-folio__project-link\" title=\"Project link\">
                            <i class=\"im im-link\"></i>
                        </a>

                        <span class=\"item-folio__caption\">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class=\"masonry__brick\">
                    <div class=\"item-folio\">

                        <div class=\"item-folio__thumb\">
                            <a href=\"images/portfolio/gallery/g-shutterbug.jpg\" class=\"thumb-link\" data-size=\"1050x700\">
                                <img src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/images/portfolio/shutterbug.jpg"), "html", null, true);
        echo "\"
                                     srcset=\"/web/template/images/portfolio/shutterbug.jpg 1x, /web/template/images/portfolio/shutterbug@2x.jpg 2x\" alt=\"\">
                                <span class=\"shadow-overlay\"></span>
                            </a>
                        </div>

                        <div class=\"item-folio__text\">
                            <h3 class=\"item-folio__title\">
                                Lady Shutterbug
                            </h3>
                            <p class=\"item-folio__cat\">
                                Branding
                            </p>
                        </div>

                        <a href=\"https://www.behance.net/\" class=\"item-folio__project-link\" title=\"Project link\">
                            <i class=\"im im-link\"></i>
                        </a>

                        <span class=\"item-folio__caption\">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

            </div>
        </div> <!-- end masonry -->

    </section> <!-- end experiences -->




    <!-- competences
    ================================================== -->
    <section id=\"competences\" class=\"s-competences target-section\">

        <div class=\"row narrow section-intro has-bottom-sep\">
            <div class=\"col-full\">
                <br>
                <br>
                <br>
                <h3>Compétences</h3>
                <h1>Latest From The Blog.</h1>
                <p class=\"lead\">Lorem ipsum Dolor adipisicing nostrud et aute. 
                Excepteur amet commodo ea dolore irure esse Duis nulla sint fugiat cillum 
                ullamco proident aliquip quis qui voluptate dolore veniam Ut laborum non est in officia.</p>
            </div>
        </div>
        
        
        <div class=\"row experiences-content\">

            <div class=\"col-full tab-full right\">
                <h3>Compétences</h3>

                <ul class=\"skill-bars\">
                    <li>
                    <div class=\"progress percent90\"><span>90%</span></div>
                    <strong>Indesign</strong>
                    </li>
                    <li>
                    <div class=\"progress percent85\"><span>85%</span></div>
                    <strong>Premiere Pro</strong>
                    </li>
                    <li>
                    <div class=\"progress percent70\"><span>70%</span></div>
                    <strong>Photoshop</strong>
                    </li>
                    <li>
                    <div class=\"progress percent75\"><span>75%</span></div>
                    <strong>Illustrator</strong>
                    </li>   
                </ul>
            </div>

        </div> <!-- end experiences-content -->

        <div class=\"row experiences-content experiences-content--buttons\">

            <div class=\"col-six tab-full left\">
                <a href=\"#0\" class=\"btn btn--primary full-width\">Download My CV</a>
            </div>
            <div class=\"col-six tab-full right\">
                <a href=\"#0\" class=\"btn full-width\">Hire Me Now</a>
            </div>

        </div> <!-- end experiences-content buttons -->

        


    <!-- s-cta
    ================================================== -->
    <section class=\"s-cta\">
        
        <div class=\"row narrow cta\">

            <div class=\"col-full cta__content\">

                <h2 class=\"h01\"><a href=\"http://www.dreamhost.com/r.cgi?287326|STYLESHOUT\">Styleshout Recommends Dreamhost.</a></h2>

                <p class=\"lead\">
                Looking for an awesome and reliable webhosting? Try <a href=\"http://www.dreamhost.com/r.cgi?287326|STYLESHOUT\">DreamHost</a>.
                Get <span>\$50 off</span> when you sign up with the promocode <span>styleshout</span>.
                </p>

                <div class=\"cta__action\">
                    <a class=\"btn btn--primary btn--large\" href=\"http://www.dreamhost.com/r.cgi?287326|STYLESHOUT\">Sign Up Now</a>
                </div>\t

            </div>

        </div> <!-- end cta -->
        
    </section>


    <!-- s-stats
    ================================================== -->
    <section id=\"stats\" class=\"s-stats\">
        <div class=\"row block-1-4 block-tab-1-2 block-mob-full stats\">

            <div class=\"col-block stats__col \">
                <div class=\"stats__count\">
                    128
                </div>
                <h4>Awards Received</h4>
            </div>
            <div class=\"col-block stats__col\">
                <div class=\"stats__count\">
                    1500
                </div>
                <h4>Cups of Coffee</h4>
            </div>
            <div class=\"col-block stats__col stats__col--highlight\">
                <div class=\"stats__upsign\">
                    <a href=\"#\"><i class=\"im im-arrow-up\" aria-hidden=\"true\"></i></a>
                </div>
                <div class=\"stats__count\">
                    110
                </div>
                <h4>Projects Completed</h4>
            </div>
            <div class=\"col-block stats__col\">
                <div class=\"stats__count\">
                    101
                </div>
                <h4>Happy Clients</h4> 
            </div>

        </div>
    </section> <!-- end s-stats -->
    
    
    

    <!-- testimonials
    ================================================== -->
    <div class=\"s-testimonials\">

        <div class=\"overlay\"></div>

        <div class=\"row testimonials-header\">
            <div class=\"col-full\">
                <h1 class=\"h02\">Loisirs</h1>
            </div>
        </div>

        <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            ";
        // line 553
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 554
            echo "                                <div class=\"content-item\">
                                    <small>";
            // line 555
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["formation"], "getDateDebut", array(), "method"), "Y-m-d"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["formation"], "getDateFin", array(), "method"), "Y-m-d"), "html", null, true);
            echo "</small>
                                    <h3>";
            // line 556
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "getName", array(), "method"), "html", null, true);
            echo "</h3>
                                    <h4>";
            // line 557
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "getLieu", array(), "method"), "html", null, true);
            echo "</h4>

                                    <p></p>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 562
        echo "                            
                            <!-- .experience-item -->
                        </div>
                    </div>
                    <!--.row-->
                </div>

</div>

    </div> <!-- end s-testimonials -->
    
    
    <!-- loisirs
    ================================================== -->
    <section id=\"loisirs\" class=\"s-loisirs target-section\">
        
        <div class=\"row loisirs-content\">

            <div class=\"col-full tab-full right\">
                <h3>I've Got Some hobbies.</h3>

                <ul class=\"skill-bars\">
                    <li>
                    <div class=\"progress percent90\"><span>90%</span></div>
                    <strong>Piano</strong>
                    </li>
                    <li>
                    <div class=\"progress percent85\"><span>70%</span></div>
                    <strong>Photographie</strong>
                    </li>
                    <li>
                    <div class=\"progress percent70\"><span>85%</span></div>
                    <strong>Badminton</strong>
                    </li>
                   
                </ul>
            </div>

        </div> <!-- end loisirs-content -->

        

            <div class=\"col-six tab-full left\">
                <div class=\"timeline\">
                    
                    ";
        // line 607
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 608
            echo "                        <div class=\"timeline__block\">
                            <div class=\"timeline__bullet\"></div>
                            <div class=\"timeline__header\">
                                <p class=\"timeline__timeframe\">";
            // line 611
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["formation"], "getDateDebut", array(), "method"), "Y-m-d"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["formation"], "getDateFin", array(), "method"), "Y-m-d"), "html", null, true);
            echo "</p>
                                <h3>";
            // line 612
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "getName", array(), "method"), "html", null, true);
            echo "</h3>
                                <h5>";
            // line 613
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "getLieu", array(), "method"), "html", null, true);
            echo "</h5>
                            </div>
                            
                        </div> <!-- end timeline__block -->
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 618
        echo "
                </div> <!-- end timeline -->
            </div> <!-- end right -->

    </section> <!-- end loisirs -->
    
    
    
    
    

    <!-- s-stats
    ================================================== -->
    <section id=\"contact\" class=\"s-contact target-section\">

        <div class=\"overlay\"></div>

        <div class=\"row narrow section-intro\">
            <div class=\"col-full\">
                <h3>Contact</h3>
                
                <p class=\"lead\">
                    Envoyez-moi un e-mail pour plus de renseignements.
                </p></div>
        </div>

        <div class=\"row contact__main\">
            <div class=\"col-eight tab-full contact__form\">
                <form name=\"contactForm\" id=\"contactForm\" method=\"post\" action=\"\">
                    <fieldset>
    
                    <div class=\"form-field\">
                        <input name=\"contactName\" type=\"text\" id=\"contactName\" placeholder=\"Name\" value=\"\" minlength=\"2\" required=\"\" aria-required=\"true\" class=\"full-width\">
                    </div>
                    <div class=\"form-field\">
                        <input name=\"contactEmail\" type=\"email\" id=\"contactEmail\" placeholder=\"Email\" value=\"\" required=\"\" aria-required=\"true\" class=\"full-width\">
                    </div>
                    <div class=\"form-field\">
                        <input name=\"contactSubject\" type=\"text\" id=\"contactSubject\" placeholder=\"Subject\" value=\"\" class=\"full-width\">
                    </div>
                    <div class=\"form-field\">
                        <textarea name=\"contactMessage\" id=\"contactMessage\" placeholder=\"message\" rows=\"10\" cols=\"50\" required=\"\" aria-required=\"true\" class=\"full-width\"></textarea>
                    </div>
                    <div class=\"form-field\">
                        <button class=\"full-width btn--primary\">Submit</button>
                        <div class=\"submit-loader\">
                            <div class=\"text-loader\">Sending...</div>
                            <div class=\"s-loader\">
                                <div class=\"bounce1\"></div>
                                <div class=\"bounce2\"></div>
                                <div class=\"bounce3\"></div>
                            </div>
                        </div>
                    </div>
    
                    </fieldset>
                </form>

                <!-- contact-warning -->
                <div class=\"message-warning\">
                    Something went wrong. Please try again.
                </div> 
            
                <!-- contact-success -->
                <div class=\"message-success\">
                    Your message was sent, thank you!<br>
                </div>
                        
            </div>
            <div class=\"col-four tab-full contact__infos\">
                <h4 class=\"h06\">Phone</h4>
                <p>Mobile: 06 40 42 83 62
                </p>

                <h4 class=\"h06\">Email</h4>
                <p>noemi.bonzi@orange.fr</p>

                <h4 class=\"h06\">Address</h4>
                <p>
                185 chemin des Balmes<br>
                38340 Voreppe
                </p>
            </div>

        </div>

    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>
        <div class=\"row\">
            <div class=\"col-full\">

                <div class=\"footer-logo\">
                    <a class=\"footer-site-logo\" href=\"#0\"><img src=\"";
        // line 714
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("template/images/logo.png"), "html", null, true);
        echo "\" alt=\"-s--Homepage}}\"/>    </a>
                    </div>

                <ul class=\"footer-social\">
                    <li><a href=\"#0\">
                        <i class=\"im im-facebook\" aria-hidden=\"true\"></i>
                        <span>Facebook</span>
                    </a></li>
                    <li><a href=\"#0\">
                        <i class=\"im im-twitter\" aria-hidden=\"true\"></i>
                        <span>Twitter</span>
                    </a></li>
                    <li><a href=\"#0\">
                        <i class=\"im im-instagram\" aria-hidden=\"true\"></i>
                        <span>Instagram</span>
                    </a></li>
                    <li><a href=\"#0\">
                        <i class=\"im im-behance\" aria-hidden=\"true\"></i>
                        <span>Behance</span>
                    </a></li>
                    <li><a href=\"#0\">
                        <i class=\"im im-pinterest\" aria-hidden=\"true\"></i>
                        <span>Pinterest</span>
                    </a></li>
                </ul>
                    
            </div>
        </div>

        <div class=\"row footer-bottom\">

            <div class=\"col-twelve\">
                <div class=\"copyright\">
                    <span>© Copyright Hola 2017</span> 
                    <span>Design by <a href=\"https://www.styleshout.com/\">styleshout</a></span>\t
                </div>

                <div class=\"go-top\">
                <a class=\"smoothscroll\" title=\"Back to Top\" href=\"#top\"><i class=\"im im-arrow-up\" aria-hidden=\"true\"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden=\"true\" class=\"pswp\" role=\"dialog\" tabindex=\"-1\">

        <div class=\"pswp__bg\"></div>
        <div class=\"pswp__scroll-wrap\">

            <div class=\"pswp__container\">
                <div class=\"pswp__item\"></div>
                <div class=\"pswp__item\"></div>
                <div class=\"pswp__item\"></div>
            </div>

            <div class=\"pswp__ui pswp__ui--hidden\">
                <div class=\"pswp__top-bar\">
                    <div class=\"pswp__counter\"></div><button class=\"pswp__button pswp__button--close\" title=\"Close (Esc)\"></button> <button class=\"pswp__button pswp__button--share\" title=
                    \"Share\"></button> <button class=\"pswp__button pswp__button--fs\" title=\"Toggle fullscreen\"></button> <button class=\"pswp__button pswp__button--zoom\" title=
                    \"Zoom in/out\"></button>
                    <div class=\"pswp__preloader\">
                        <div class=\"pswp__preloader__icn\">
                            <div class=\"pswp__preloader__cut\">
                                <div class=\"pswp__preloader__donut\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">
                    <div class=\"pswp__share-tooltip\"></div>
                </div><button class=\"pswp__button pswp__button--arrow--left\" title=\"Previous (arrow left)\"></button> <button class=\"pswp__button pswp__button--arrow--right\" title=
                \"Next (arrow right)\"></button>
                <div class=\"pswp__caption\">
                    <div class=\"pswp__caption__center\"></div>
                </div>
            </div>

        </div>

    </div><!-- end photoSwipe background -->

    <div id=\"preloader\">
        <div id=\"loader\"></div>
    </div>
";
        
        $__internal_88d043d07fa92f8e2ea719ef615bccf5d9146fd628b5647262d4fb94bdc2db35->leave($__internal_88d043d07fa92f8e2ea719ef615bccf5d9146fd628b5647262d4fb94bdc2db35_prof);

        
        $__internal_92852481900df1784a05ab0c606afe749cd553f6bda0422cb0558e0837f53c30->leave($__internal_92852481900df1784a05ab0c606afe749cd553f6bda0422cb0558e0837f53c30_prof);

    }

    public function getTemplateName()
    {
        return "@App/default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  858 => 714,  760 => 618,  749 => 613,  745 => 612,  739 => 611,  734 => 608,  730 => 607,  683 => 562,  672 => 557,  668 => 556,  662 => 555,  659 => 554,  655 => 553,  479 => 380,  445 => 349,  411 => 318,  377 => 287,  343 => 256,  309 => 225,  275 => 194,  241 => 163,  202 => 126,  189 => 119,  185 => 118,  179 => 117,  174 => 114,  170 => 113,  96 => 44,  81 => 32,  57 => 11,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"base.html.twig\" %}

{% block body %}

    <!-- header
    ================================================== -->
    <header class=\"s-header\">

        <div class=\"header-logo\">
            <a class=\"site-logo\" href=\"index.html\"><img src=\"{{asset('template/images/logo.png')}}\" alt=\"Homepage\"></a>
        </div>

        <nav class=\"header-nav-wrap\">
            <ul class=\"header-nav\">
                <li class=\"current\"><a class=\"smoothscroll\"  href=\"#home\" title=\"home\">Accueil</a></li>
                <li><a class=\"smoothscroll\"  href=\"#formations\" title=\"formations\">Formations</a></li>
                <li><a class=\"smoothscroll\"  href=\"#experiences\" title=\"experiences\">Expériences</a></li>
                <li><a class=\"smoothscroll\"  href=\"#competences\" title=\"competences\">Compétences</a></li>
                <li><a class=\"smoothscroll\"  href=\"#loisirs\" title=\"loisirs\">Loisirs</a></li>
                <li><a class=\"smoothscroll\"  href=\"#contact\" title=\"contact\">Contact</a></li>
            </ul>
        </nav>

        <a class=\"header-menu-toggle\" href=\"#0\"><span>Menu</span></a>

    </header> <!-- end s-header -->


   <!-- home
   ================================================== -->
   <section id=\"home\" class=\"s-home page-hero target-section\" data-parallax=\"scroll\" data-image-src=\"{{asset('template/images/hero-bg.jpg')}}\"  data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class=\"overlay\"></div>
        <div class=\"shadow-overlay\"></div>

        <div class=\"home-content\">

            <div class=\"row home-content__main\">

                <h3>Bienvenus</h3>

                <h1>
                    {{ firstname }} {{ name }}. <br>
                    Chargée de communication <br>
                    et graphiste, Grenoble.
                </h1>

                <div class=\"home-content__buttons\">
                    <a href=\"#formations\" class=\"smoothscroll btn btn--stroke\">
                        Projets
                    </a>
                    <a href=\"#experiences\" class=\"smoothscroll btn btn--stroke\">
                        Informations
                    </a>
                </div>

                <div class=\"home-content__scroll\">
                    <a href=\"#experiences\" class=\"scroll-link smoothscroll\">
                        <span>Scroll Down</span>
                    </a>
                </div>

            </div>

        </div> <!-- end home-content -->

        <ul class=\"home-social\">
            <li>
                <a href=\"#\"><i class=\"im im-facebook\" aria-hidden=\"true\"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href=\"#\"><i class=\"im im-twitter\" aria-hidden=\"true\"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href=\"#\"><i class=\"im im-instagram\" aria-hidden=\"true\"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href=\"#\"><i class=\"im im-behance\" aria-hidden=\"true\"></i><span>Behance</span></a>
            </li>
            <li>
                <a href=\"#\"><i class=\"im im-pinterest\" aria-hidden=\"true\"></i><span>Pinterest</span></a>
            </li>
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- formations
    ================================================== -->
    <section id=\"formations\" class=\"s-formations target-section\">
        
        <div class=\"row narrow section-intro has-bottom-sep\">
            <div class=\"col-full text-center\">
                <br>
                <br>
                <br>
                <h3>Formations</h3>
            </div>
        </div>


        <div class=\"row formations-content formations-content--timeline\">

            <div class=\"col-full text-center\">
                <h3>Mon parcours</h3>
            </div>

            <div class=\"col-six tab-full left\">
                <div class=\"timeline\">
                    
                    {% for formation in formations %}
                        <div class=\"timeline__block\">
                            <div class=\"timeline__bullet\"></div>
                            <div class=\"timeline__header\">
                                <p class=\"timeline__timeframe\">{{ formation.getDateDebut()|date(\"Y-m-d\") }} - {{ formation.getDateFin()|date(\"Y-m-d\") }}</p>
                                <h3>{{ formation.getName() }}</h3>
                                <h5>{{ formation.getLieu() }}</h5>
                            </div>
                            <div class=\"timeline__desc\">
                                <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                            </div>
                        </div> <!-- end timeline__block -->
                    {% endfor %}

                    

                    

                </div> <!-- end timeline -->
            </div> <!-- end right -->

        </div> <!-- end formations-content timeline -->

    </section> <!-- end formations -->
    

    <!-- experiences
    ================================================== -->
    <section id=\"experiences\" class=\"s-experiences target-section\">

        <div class=\"row narrow section-intro has-bottom-sep\">
            <div class=\"col-full\">
                <br>
                <br>
                <br>
                <h3>Expériences</h3>
                <h1>Mes derniers travaux</h1>
                
                <p class=\"lead\">Lorem ipsum Dolor adipisicing nostrud et aute Excepteur amet commodo ea dolore irure esse Duis nulla sint fugiat cillum ullamco proident aliquip quis qui voluptate dolore veniam Ut laborum non est in officia.</p>
            </div>
        </div>

        <div class=\"row masonry-wrap\">
            <div class=\"masonry\">

                <div class=\"masonry__brick\">
                    <div class=\"item-folio\">

                        <div class=\"item-folio__thumb\">
                            <a href=\"images/portfolio/gallery/g-beetle.jpg\" class=\"thumb-link\" title=\"The Beetle Car\" data-size=\"1050x700\">
                                <img src=\"{{asset('template/images/portfolio/beetle.jpg')}}\" 
                                     srcset=\"/web/template/images/portfolio/beetle.jpg 1x, /web/template/images/portfolio/beetle@2x.jpg 2x\" alt=\"\">
                                <span class=\"shadow-overlay\"></span>
                            </a>
                        </div>

                        <div class=\"item-folio__text\">
                            <h3 class=\"item-folio__title\">
                                The Beetle
                            </h3>
                            <p class=\"item-folio__cat\">
                                Web Development
                            </p>
                        </div>

                        <a href=\"https://www.behance.net/\" class=\"item-folio__project-link\" title=\"Project link\">
                            <i class=\"im im-link\"></i>
                        </a>

                        <div class=\"item-folio__caption\">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class=\"masonry__brick\">
                    <div class=\"item-folio\">

                        <div class=\"item-folio__thumb\"> 
                            <a href=\"images/portfolio/gallery/g-lighthouse.jpg\" class=\"thumb-link\" title=\"Lighthouse\" data-size=\"1050x700\">
                                <img src=\"{{asset('template/images/portfolio/lighthouse.jpg')}}\" 
                                     srcset=\"/web/template/images/portfolio/lighthouse.jpg 1x, /web/template/images/portfolio/lighthouse@2x.jpg 2x\" alt=\"\">
                                <span class=\"shadow-overlay\"></span>
                            </a>
                        </div>

                        <div class=\"item-folio__text\">
                            <h3 class=\"item-folio__title\">
                                Lighthouse
                            </h3>
                            <p class=\"item-folio__cat\">
                                Web Design
                            </p>
                        </div>

                        <a href=\"https://www.behance.net/\" class=\"item-folio__project-link\" title=\"Project link\">
                            <i class=\"im im-link\"></i>
                        </a>

                        <div class=\"item-folio__caption\">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </div>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class=\"masonry__brick\">
                    <div class=\"item-folio\">

                        <div class=\"item-folio__thumb\">
                            <a href=\"images/portfolio/gallery/g-salad.jpg\" class=\"thumb-link\" data-size=\"1050x700\">
                                <img src=\"{{asset('template/images/portfolio/salad.jpg')}}\" 
                                     srcset=\"/web/template/images/portfolio/salad.jpg 1x, /web/template/images/portfolio/salad@2x.jpg 2x\" alt=\"\">
                                <span class=\"shadow-overlay\"></span>
                            </a>
                        </div>

                        <div class=\"item-folio__text\">
                            <h3 class=\"item-folio__title\">
                                Salad
                            </h3>
                            <p class=\"item-folio__cat\">
                                Branding
                            </p>
                        </div>

                        <a href=\"https://www.behance.net/\" class=\"item-folio__project-link\" title=\"Project link\">
                            <i class=\"im im-link\"></i>
                        </a>

                        <span class=\"item-folio__caption\">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class=\"masonry__brick\">
                    <div class=\"item-folio\">

                        <div class=\"item-folio__thumb\">
                            <a href=\"images/portfolio/gallery/g-woodcraft.jpg\" class=\"thumb-link\" data-size=\"1050x700\">
                                <img src=\"{{asset('template/images/portfolio/woodcraft.jpg')}}\"
                                     srcset=\"/web/template/images/portfolio/woodcraft.jpg 1x, /web/template/images/portfolio/woodcraft@2x.jpg 2x\" alt=\"\">
                                <span class=\"shadow-overlay\"></span>
                            </a>
                        </div>

                        <div class=\"item-folio__text\">
                            <h3 class=\"item-folio__title\">
                                Woodcraft
                            </h3>
                            <p class=\"item-folio__cat\">
                                Branding
                            </p>
                        </div>

                        <a href=\"https://www.behance.net/\" class=\"item-folio__project-link\" title=\"Project link\">
                            <i class=\"im im-link\"></i>
                        </a>

                        <span class=\"item-folio__caption\">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class=\"masonry__brick\">
                    <div class=\"item-folio\">

                        <div class=\"item-folio__thumb\">
                            <a href=\"images/portfolio/gallery/g-skaterboy.jpg\" class=\"thumb-link\" data-size=\"1050x700\">
                                <img src=\"{{asset('template/images/portfolio/skaterboy.jpg')}}\"
                                     srcset=\"/web/template/images/portfolio/skaterboy.jpg 1x, /web/template/images/portfolio/skaterboy@2x.jpg 2x\" alt=\"\">
                                <span class=\"shadow-overlay\"></span>
                            </a>
                        </div>

                        <div class=\"item-folio__text\">
                            <h3 class=\"item-folio__title\">
                                Skaterboy
                            </h3>
                            <p class=\"item-folio__cat\">
                                Web Development
                            </p>
                        </div>

                        <a href=\"https://www.behance.net/\" class=\"item-folio__project-link\" title=\"Project link\">
                            <i class=\"im im-link\"></i>
                        </a>

                        <span class=\"item-folio__caption\">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class=\"masonry__brick\">
                    <div class=\"item-folio\">

                        <div class=\"item-folio__thumb\">
                            <a href=\"images/portfolio/gallery/g-liberty.jpg\" class=\"thumb-link\" data-size=\"1050x700\">
                                <img src=\"{{asset('template/images/portfolio/liberty.jpg')}}\"
                                     srcset=\"/web/template/images/portfolio/liberty.jpg 1x, /web/template/images/portfolio/liberty@2x.jpg 2x\" alt=\"\">
                                <span class=\"shadow-overlay\"></span>
                            </a>
                        </div>

                        <div class=\"item-folio__text\">
                            <h3 class=\"item-folio__title\">
                                Liberty
                            </h3>
                            <p class=\"item-folio__cat\">
                                Branding
                            </p>
                        </div>

                        <a href=\"https://www.behance.net/\" class=\"item-folio__project-link\" title=\"Project link\">
                            <i class=\"im im-link\"></i>
                        </a>

                        <span class=\"item-folio__caption\">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class=\"masonry__brick\">
                    <div class=\"item-folio\">

                        <div class=\"item-folio__thumb\">
                            <a href=\"images/portfolio/gallery/g-minimalismo.jpg\" class=\"thumb-link\" data-size=\"1050x700\">
                                <img src=\"{{asset('template/images/portfolio/minimalismo.jpg')}}\"
                                     srcset=\"/web/template/images/portfolio/minimalismo.jpg 1x, /web/template/images/portfolio/minimalismo@2x.jpg 2x\" alt=\"\">
                                <span class=\"shadow-overlay\"></span>
                            </a>
                        </div>

                        <div class=\"item-folio__text\">
                            <h3 class=\"item-folio__title\">
                                Minimalismo
                            </h3>
                            <p class=\"item-folio__cat\">
                                Web Design
                            </p>
                        </div>

                        <a href=\"https://www.behance.net/\" class=\"item-folio__project-link\" title=\"Project link\">
                            <i class=\"im im-link\"></i>
                        </a>

                        <span class=\"item-folio__caption\">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

                <div class=\"masonry__brick\">
                    <div class=\"item-folio\">

                        <div class=\"item-folio__thumb\">
                            <a href=\"images/portfolio/gallery/g-shutterbug.jpg\" class=\"thumb-link\" data-size=\"1050x700\">
                                <img src=\"{{asset('template/images/portfolio/shutterbug.jpg')}}\"
                                     srcset=\"/web/template/images/portfolio/shutterbug.jpg 1x, /web/template/images/portfolio/shutterbug@2x.jpg 2x\" alt=\"\">
                                <span class=\"shadow-overlay\"></span>
                            </a>
                        </div>

                        <div class=\"item-folio__text\">
                            <h3 class=\"item-folio__title\">
                                Lady Shutterbug
                            </h3>
                            <p class=\"item-folio__cat\">
                                Branding
                            </p>
                        </div>

                        <a href=\"https://www.behance.net/\" class=\"item-folio__project-link\" title=\"Project link\">
                            <i class=\"im im-link\"></i>
                        </a>

                        <span class=\"item-folio__caption\">
                            <p>Vero molestiae sed aut natus excepturi. Et tempora numquam. Temporibus iusto quo.Unde dolorem corrupti neque nisi.</p>
                        </span>

                    </div> <!-- end item-folio -->
                </div> <!-- end masonry__brick -->

            </div>
        </div> <!-- end masonry -->

    </section> <!-- end experiences -->




    <!-- competences
    ================================================== -->
    <section id=\"competences\" class=\"s-competences target-section\">

        <div class=\"row narrow section-intro has-bottom-sep\">
            <div class=\"col-full\">
                <br>
                <br>
                <br>
                <h3>Compétences</h3>
                <h1>Latest From The Blog.</h1>
                <p class=\"lead\">Lorem ipsum Dolor adipisicing nostrud et aute. 
                Excepteur amet commodo ea dolore irure esse Duis nulla sint fugiat cillum 
                ullamco proident aliquip quis qui voluptate dolore veniam Ut laborum non est in officia.</p>
            </div>
        </div>
        
        
        <div class=\"row experiences-content\">

            <div class=\"col-full tab-full right\">
                <h3>Compétences</h3>

                <ul class=\"skill-bars\">
                    <li>
                    <div class=\"progress percent90\"><span>90%</span></div>
                    <strong>Indesign</strong>
                    </li>
                    <li>
                    <div class=\"progress percent85\"><span>85%</span></div>
                    <strong>Premiere Pro</strong>
                    </li>
                    <li>
                    <div class=\"progress percent70\"><span>70%</span></div>
                    <strong>Photoshop</strong>
                    </li>
                    <li>
                    <div class=\"progress percent75\"><span>75%</span></div>
                    <strong>Illustrator</strong>
                    </li>   
                </ul>
            </div>

        </div> <!-- end experiences-content -->

        <div class=\"row experiences-content experiences-content--buttons\">

            <div class=\"col-six tab-full left\">
                <a href=\"#0\" class=\"btn btn--primary full-width\">Download My CV</a>
            </div>
            <div class=\"col-six tab-full right\">
                <a href=\"#0\" class=\"btn full-width\">Hire Me Now</a>
            </div>

        </div> <!-- end experiences-content buttons -->

        


    <!-- s-cta
    ================================================== -->
    <section class=\"s-cta\">
        
        <div class=\"row narrow cta\">

            <div class=\"col-full cta__content\">

                <h2 class=\"h01\"><a href=\"http://www.dreamhost.com/r.cgi?287326|STYLESHOUT\">Styleshout Recommends Dreamhost.</a></h2>

                <p class=\"lead\">
                Looking for an awesome and reliable webhosting? Try <a href=\"http://www.dreamhost.com/r.cgi?287326|STYLESHOUT\">DreamHost</a>.
                Get <span>\$50 off</span> when you sign up with the promocode <span>styleshout</span>.
                </p>

                <div class=\"cta__action\">
                    <a class=\"btn btn--primary btn--large\" href=\"http://www.dreamhost.com/r.cgi?287326|STYLESHOUT\">Sign Up Now</a>
                </div>\t

            </div>

        </div> <!-- end cta -->
        
    </section>


    <!-- s-stats
    ================================================== -->
    <section id=\"stats\" class=\"s-stats\">
        <div class=\"row block-1-4 block-tab-1-2 block-mob-full stats\">

            <div class=\"col-block stats__col \">
                <div class=\"stats__count\">
                    128
                </div>
                <h4>Awards Received</h4>
            </div>
            <div class=\"col-block stats__col\">
                <div class=\"stats__count\">
                    1500
                </div>
                <h4>Cups of Coffee</h4>
            </div>
            <div class=\"col-block stats__col stats__col--highlight\">
                <div class=\"stats__upsign\">
                    <a href=\"#\"><i class=\"im im-arrow-up\" aria-hidden=\"true\"></i></a>
                </div>
                <div class=\"stats__count\">
                    110
                </div>
                <h4>Projects Completed</h4>
            </div>
            <div class=\"col-block stats__col\">
                <div class=\"stats__count\">
                    101
                </div>
                <h4>Happy Clients</h4> 
            </div>

        </div>
    </section> <!-- end s-stats -->
    
    
    

    <!-- testimonials
    ================================================== -->
    <div class=\"s-testimonials\">

        <div class=\"overlay\"></div>

        <div class=\"row testimonials-header\">
            <div class=\"col-full\">
                <h1 class=\"h02\">Loisirs</h1>
            </div>
        </div>

        <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            {% for formation in formations %}
                                <div class=\"content-item\">
                                    <small>{{ formation.getDateDebut()|date(\"Y-m-d\") }} - {{ formation.getDateFin()|date(\"Y-m-d\") }}</small>
                                    <h3>{{ formation.getName() }}</h3>
                                    <h4>{{ formation.getLieu() }}</h4>

                                    <p></p>
                                </div>
                            {% endfor %}
                            
                            <!-- .experience-item -->
                        </div>
                    </div>
                    <!--.row-->
                </div>

</div>

    </div> <!-- end s-testimonials -->
    
    
    <!-- loisirs
    ================================================== -->
    <section id=\"loisirs\" class=\"s-loisirs target-section\">
        
        <div class=\"row loisirs-content\">

            <div class=\"col-full tab-full right\">
                <h3>I've Got Some hobbies.</h3>

                <ul class=\"skill-bars\">
                    <li>
                    <div class=\"progress percent90\"><span>90%</span></div>
                    <strong>Piano</strong>
                    </li>
                    <li>
                    <div class=\"progress percent85\"><span>70%</span></div>
                    <strong>Photographie</strong>
                    </li>
                    <li>
                    <div class=\"progress percent70\"><span>85%</span></div>
                    <strong>Badminton</strong>
                    </li>
                   
                </ul>
            </div>

        </div> <!-- end loisirs-content -->

        

            <div class=\"col-six tab-full left\">
                <div class=\"timeline\">
                    
                    {% for formation in formations %}
                        <div class=\"timeline__block\">
                            <div class=\"timeline__bullet\"></div>
                            <div class=\"timeline__header\">
                                <p class=\"timeline__timeframe\">{{ formation.getDateDebut()|date(\"Y-m-d\") }} - {{ formation.getDateFin()|date(\"Y-m-d\") }}</p>
                                <h3>{{ formation.getName() }}</h3>
                                <h5>{{ formation.getLieu() }}</h5>
                            </div>
                            
                        </div> <!-- end timeline__block -->
                    {% endfor %}

                </div> <!-- end timeline -->
            </div> <!-- end right -->

    </section> <!-- end loisirs -->
    
    
    
    
    

    <!-- s-stats
    ================================================== -->
    <section id=\"contact\" class=\"s-contact target-section\">

        <div class=\"overlay\"></div>

        <div class=\"row narrow section-intro\">
            <div class=\"col-full\">
                <h3>Contact</h3>
                
                <p class=\"lead\">
                    Envoyez-moi un e-mail pour plus de renseignements.
                </p></div>
        </div>

        <div class=\"row contact__main\">
            <div class=\"col-eight tab-full contact__form\">
                <form name=\"contactForm\" id=\"contactForm\" method=\"post\" action=\"\">
                    <fieldset>
    
                    <div class=\"form-field\">
                        <input name=\"contactName\" type=\"text\" id=\"contactName\" placeholder=\"Name\" value=\"\" minlength=\"2\" required=\"\" aria-required=\"true\" class=\"full-width\">
                    </div>
                    <div class=\"form-field\">
                        <input name=\"contactEmail\" type=\"email\" id=\"contactEmail\" placeholder=\"Email\" value=\"\" required=\"\" aria-required=\"true\" class=\"full-width\">
                    </div>
                    <div class=\"form-field\">
                        <input name=\"contactSubject\" type=\"text\" id=\"contactSubject\" placeholder=\"Subject\" value=\"\" class=\"full-width\">
                    </div>
                    <div class=\"form-field\">
                        <textarea name=\"contactMessage\" id=\"contactMessage\" placeholder=\"message\" rows=\"10\" cols=\"50\" required=\"\" aria-required=\"true\" class=\"full-width\"></textarea>
                    </div>
                    <div class=\"form-field\">
                        <button class=\"full-width btn--primary\">Submit</button>
                        <div class=\"submit-loader\">
                            <div class=\"text-loader\">Sending...</div>
                            <div class=\"s-loader\">
                                <div class=\"bounce1\"></div>
                                <div class=\"bounce2\"></div>
                                <div class=\"bounce3\"></div>
                            </div>
                        </div>
                    </div>
    
                    </fieldset>
                </form>

                <!-- contact-warning -->
                <div class=\"message-warning\">
                    Something went wrong. Please try again.
                </div> 
            
                <!-- contact-success -->
                <div class=\"message-success\">
                    Your message was sent, thank you!<br>
                </div>
                        
            </div>
            <div class=\"col-four tab-full contact__infos\">
                <h4 class=\"h06\">Phone</h4>
                <p>Mobile: 06 40 42 83 62
                </p>

                <h4 class=\"h06\">Email</h4>
                <p>noemi.bonzi@orange.fr</p>

                <h4 class=\"h06\">Address</h4>
                <p>
                185 chemin des Balmes<br>
                38340 Voreppe
                </p>
            </div>

        </div>

    </section> <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer>
        <div class=\"row\">
            <div class=\"col-full\">

                <div class=\"footer-logo\">
                    <a class=\"footer-site-logo\" href=\"#0\"><img src=\"{{asset('template/images/logo.png') }}\" alt=\"-s--Homepage}}\"/>    </a>
                    </div>

                <ul class=\"footer-social\">
                    <li><a href=\"#0\">
                        <i class=\"im im-facebook\" aria-hidden=\"true\"></i>
                        <span>Facebook</span>
                    </a></li>
                    <li><a href=\"#0\">
                        <i class=\"im im-twitter\" aria-hidden=\"true\"></i>
                        <span>Twitter</span>
                    </a></li>
                    <li><a href=\"#0\">
                        <i class=\"im im-instagram\" aria-hidden=\"true\"></i>
                        <span>Instagram</span>
                    </a></li>
                    <li><a href=\"#0\">
                        <i class=\"im im-behance\" aria-hidden=\"true\"></i>
                        <span>Behance</span>
                    </a></li>
                    <li><a href=\"#0\">
                        <i class=\"im im-pinterest\" aria-hidden=\"true\"></i>
                        <span>Pinterest</span>
                    </a></li>
                </ul>
                    
            </div>
        </div>

        <div class=\"row footer-bottom\">

            <div class=\"col-twelve\">
                <div class=\"copyright\">
                    <span>© Copyright Hola 2017</span> 
                    <span>Design by <a href=\"https://www.styleshout.com/\">styleshout</a></span>\t
                </div>

                <div class=\"go-top\">
                <a class=\"smoothscroll\" title=\"Back to Top\" href=\"#top\"><i class=\"im im-arrow-up\" aria-hidden=\"true\"></i></a>
                </div>
            </div>

        </div> <!-- end footer-bottom -->

    </footer> <!-- end footer -->


    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden=\"true\" class=\"pswp\" role=\"dialog\" tabindex=\"-1\">

        <div class=\"pswp__bg\"></div>
        <div class=\"pswp__scroll-wrap\">

            <div class=\"pswp__container\">
                <div class=\"pswp__item\"></div>
                <div class=\"pswp__item\"></div>
                <div class=\"pswp__item\"></div>
            </div>

            <div class=\"pswp__ui pswp__ui--hidden\">
                <div class=\"pswp__top-bar\">
                    <div class=\"pswp__counter\"></div><button class=\"pswp__button pswp__button--close\" title=\"Close (Esc)\"></button> <button class=\"pswp__button pswp__button--share\" title=
                    \"Share\"></button> <button class=\"pswp__button pswp__button--fs\" title=\"Toggle fullscreen\"></button> <button class=\"pswp__button pswp__button--zoom\" title=
                    \"Zoom in/out\"></button>
                    <div class=\"pswp__preloader\">
                        <div class=\"pswp__preloader__icn\">
                            <div class=\"pswp__preloader__cut\">
                                <div class=\"pswp__preloader__donut\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">
                    <div class=\"pswp__share-tooltip\"></div>
                </div><button class=\"pswp__button pswp__button--arrow--left\" title=\"Previous (arrow left)\"></button> <button class=\"pswp__button pswp__button--arrow--right\" title=
                \"Next (arrow right)\"></button>
                <div class=\"pswp__caption\">
                    <div class=\"pswp__caption__center\"></div>
                </div>
            </div>

        </div>

    </div><!-- end photoSwipe background -->

    <div id=\"preloader\">
        <div id=\"loader\"></div>
    </div>
{% endblock %}", "@App/default/index.html.twig", "/home/ubuntu/workspace/src/AppBundle/Resources/views/default/index.html.twig");
    }
}
