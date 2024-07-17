<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__8211f8d7c44d0357f6a48e369e538e9db55c05903a41f5d67ba71cd69432cdb4 */
class __TwigTemplate_5915a13df020479f7ae3c833026b7fe4c07e4190a132aaaf3c9a8e20a75c28d4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/akimpresta/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/akimpresta/img/app_icon.png\" />

<title>Produits • AKIMMAKAKO</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'TG';
    var _PS_VERSION_ = '1.7.8.11';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = 'a61d6a1f5658135a0681ca25d9ea3764';
    var token_admin_orders = tokenAdminOrders = '1cabcfceafc733d7a25eaa437a887cf5';
    var token_admin_customers = 'a34ccbc658ed5f118a206c5108618351';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '79ebba84070d6f738500cfc40c568fea';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '9bb31592b82315cb4c35b5505cb7c56a';
    var choose_language_translate = 'Choisissez la langue :';
    var default_language = '1';
    var admin_modules_link = '/akimpresta/admin587p4mg5u/index.php/improve/modules/catalog/recommended?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ';
    var admin_notification_get_link = '/akimpresta/admin587p4mg5u/index.php";
        // line 42
        echo "/common/notifications?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ';
    var admin_notification_push_link = adminNotificationPushLink = '/akimpresta/admin587p4mg5u/index.php/common/notifications/ack?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ';
    var tab_modules_list = '';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/akimpresta/admin587p4mg5u/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/akimpresta/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/akimpresta/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/akimpresta/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/akimpresta/admin587p4mg5u/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/akimpresta/modules/ps_mbo/views/css/catalog.css?v=3.1.3\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/akimpresta/modules/ps_mbo/views/css/recommended-modules-since-1.7.8.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/akimpresta/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/akimpresta/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/akimpresta\\/admin587p4mg5u\\/\";
var baseDir = \"\\/akimpresta\\/\";
var changeFormLanguageUrl = \"\\/akimpresta\\/admin587p4mg5u\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\"";
        // line 65
        echo ",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u202f\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/akimpresta/admin587p4mg5u/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/akimpresta/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/akimpresta/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/akimpresta/js/admin.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/akimpresta/admin587p4mg5u/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/akimpresta/js/tools.js?v=1.7.8.11\"></script>
<script type=\"text/javascript\" src=\"/akimpresta/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/akimpresta/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/akimpresta/admin587p4mg5u/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/akimpresta/modules/ps_mbo/views/js/recommended-modules.js?v=3.1.3\"></script>
<script type=\"text/javascript\" src=\"/akimpresta/modules/ps_faviconnotificationbo/views/js/favico.js\"";
        // line 83
        echo "></script>
<script type=\"text/javascript\" src=\"/akimpresta/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/akimpresta/admin587p4mg5u/index.php/common/notifications?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 101
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-fr adminproducts\"
  data-base-url=\"/akimpresta/admin587p4mg5u/index.php\"  data-token=\"bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminDashboard&amp;token=18dd8c368b7be72fe4856d87853adafa\"></a>
      <span id=\"shop_version\">1.7.8.11</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminOrders&amp;token=1cabcfceafc733d7a25eaa437a887cf5\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=766d29e1749c2c97b3e475d52981e1e8\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/akimpresta/admin587p4mg5u/index.php/improve/modules/manage?token=40647568ae65d421f433563b2dfbd0ae\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=cd5b01230460bdc747af6033621b1443\"
                 data-item=\"Nouveau bon de ";
        // line 136
        echo "réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/akimpresta/admin587p4mg5u/index.php/sell/catalog/products/new?token=40647568ae65d421f433563b2dfbd0ae\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/akimpresta/admin587p4mg5u/index.php/sell/catalog/categories/new?token=40647568ae65d421f433563b2dfbd0ae\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"192\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products/0/20/id_product/desc\"
        data-post-link=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminQuickAccesses&token=4de4e1b467fdd6f3292ea0d015297518\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Produits - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter la page actuelle à l'accès rapide
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminQuickAccesses&token=4de4e1b467fdd6f3292ea0d015297518\">
      <i class=\"material-icons\">settings</i>
      Gérez vos accès rapides
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/akimpresta/admin587p4mg5u/index.php?controller=AdminSearch&amp;token=9657a077dc07253270479f2cd14bf83f\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" cl";
        // line 176
        echo "ass=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\" aria-label=\"Barre de recherche\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, référence, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"Nom\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=";
        // line 190
        echo "\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/akimpresta/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Voir ma boutique</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Commandes<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
 ";
        // line 245
        echo "           >
              Clients<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouvelle commande pour le moment :(<br>
              Avez-vous consulté vos <strong><a href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=7f316a15b76258a865e30b28d34ee92e\">paniers abandonnés</a></strong> ?<br> Votre prochaine commande s'y trouve peut-être !
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Aucun nouveau client pour l'instant :(<br>
              Êtes-vous actifs sur les réseaux sociaux en ce moment ?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-templ";
        // line 291
        echo "ate\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - enregistré le <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/akimpresta/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Ravi de vous revoir Paulin</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/akimpresta/admin587p4mg5u/index.php/configure/advanced/employees/1/edit?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\">
      <i class=\"material-icons\">edit</i>
      <span>Votre profil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/ressources/documentation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Documentation</a>
    <a class=\"dropdown-item\" href=\"https://ww";
        // line 333
        echo "w.prestashop.com/fr/formation?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Formation</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Trouver un expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com/fr/?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/fr/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-fr&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centre d'assistance</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminLogin&amp;logout=1&amp;token=bae3e0d79456437d2cc2c7938505082a\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/akimpresta/admin587p4mg5u/index.php/configure/advanced/employees/toggle-navigation?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
   ";
        // line 361
        echo "           <a href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminDashboard&amp;token=18dd8c368b7be72fe4856d87853adafa\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendre</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/akimpresta/admin587p4mg5u/index.php/sell/orders/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Commandes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/sell/orders/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Commandes
                                </a>
                              </li>

                         ";
        // line 398
        echo "                                                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/sell/orders/invoices/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Factures
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/sell/orders/credit-slips/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Avoirs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/sell/orders/delivery-slips/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Bons de livraison
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminCarts&amp;token=7f316a15b76258a865e30b28d34ee92e\" clas";
        // line 426
        echo "s=\"link\"> Paniers
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/akimpresta/admin587p4mg5u/index.php/sell/catalog/products?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogue
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/sell/catalog/products?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-A";
        // line 458
        echo "dminCategories\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/sell/catalog/categories?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Catégories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/sell/catalog/monitoring/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Suivi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminAttributesGroups&amp;token=60d41b6f8b7885dff954d319c8169f9d\" class=\"link\"> Attributs &amp; caractéristiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/sell/catalog/brands/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Marques et fournisseurs
                                </a>
                              </li>

                                                                       ";
        // line 487
        echo "           
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/sell/attachments/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Fichiers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminCartRules&amp;token=cd5b01230460bdc747af6033621b1443\" class=\"link\"> Réductions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/sell/stocks/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/akimpresta/admin587p4mg5u/index.php/sell/customers/?_token=bNEcRuZPBWXyg_";
        // line 518
        echo "Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clients
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/sell/customers/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/sell/addresses/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Adresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_subm";
        // line 550
        echo "enu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminCustomerThreads&amp;token=79ebba84070d6f738500cfc40c568fea\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      SAV
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminCustomerThreads&amp;token=79ebba84070d6f738500cfc40c568fea\" class=\"link\"> SAV
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/sell/customer-service/order-messages/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Messages prédéfinis
                                </a>
                              </li>

                                                                                  
                              
                               ";
        // line 579
        echo "                             
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminReturn&amp;token=db71fa68e6bc88c0018409b8596f3892\" class=\"link\"> Retours produits
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/akimpresta/admin587p4mg5u/index.php/modules/metrics/legacy/stats?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiques
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/modules/metrics/legacy/stats?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Statistiques
                                </a>
                  ";
        // line 608
        echo "            </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/modules/metrics?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personnaliser</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/akimpresta/admin587p4mg5u/index.php/modules/addons/modules/catalog?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
            ";
        // line 646
        echo "                  
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/modules/addons/modules/catalog?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/improve/modules/manage?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Gestionnaire de modules 
                                </a>
                              </li>

                                                                                                                                                                                          </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/akimpresta/admin587p4mg5u/index.php/modules/addons/themes/catalog?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Apparence
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
      ";
        // line 675
        echo "                                                      </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"139\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/modules/addons/themes/catalog?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Catalogue de thèmes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/improve/design/themes/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Thème et logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/improve/design/mail_theme/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Thème d&#039;e-mail
                                </a>
                              </li>

                                                                                  
                              
                   ";
        // line 704
        echo "                                         
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/improve/design/cms-pages/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/improve/design/modules/positions/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminImages&amp;token=609fe33d98641ea3ea3f9a8da88cf3bf\" class=\"link\"> Images
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/modules/link-widget/list?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Liste de liens
                                </a>
                             ";
        // line 732
        echo " </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminCarriers&amp;token=616c88943eae23ee744d59a9dd5ff24b\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Livraison
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminCarriers&amp;token=616c88943eae23ee744d59a9dd5ff24b\" class=\"link\"> Transporteurs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/improve/ship";
        // line 763
        echo "ping/preferences/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/akimpresta/admin587p4mg5u/index.php/improve/payment/payment_methods?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Paiement
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/improve/payment/payment_methods?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Moyens de paiement
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"";
        // line 795
        echo "link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/improve/payment/preferences?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Préférences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/akimpresta/admin587p4mg5u/index.php/improve/international/localization/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/improve/international/localization/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Localisation
                                </a>
                              </li>

                                      ";
        // line 825
        echo "                                            
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/improve/international/zones/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Zones géographiques
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/improve/international/taxes/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/improve/international/translations/settings?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Traductions
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"144\" id=\"subtab-Marketing\">
                    <a href=\"http";
        // line 856
        echo "://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminPsfacebookModule&amp;token=71029c2593903272ff88f23a3090dfa0\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-144\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminPsfacebookModule&amp;token=71029c2593903272ff88f23a3090dfa0\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=85be67268dc6aed24605a219ef3b5171\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      ";
        // line 886
        echo "
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurer</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/akimpresta/admin587p4mg5u/index.php/configure/shop/preferences/preferences?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Paramètres de la boutique
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/configure/shop/preferences/preferences?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Paramètres généraux
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-Admi";
        // line 920
        echo "nParentOrderPreferences\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/configure/shop/order-preferences/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Commandes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/configure/shop/product-preferences/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Produits
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/configure/shop/customer-preferences/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Clients
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/configure/shop/contacts/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  ";
        // line 949
        echo "
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/configure/shop/seo-urls/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Trafic et SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminSearchConf&amp;token=bff5b9a576cbfbaa7141a8cac2606905\" class=\"link\"> Rechercher
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/akimpresta/admin587p4mg5u/index.php/configure/advanced/system-information/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Paramètres avancés
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </";
        // line 979
        echo "i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/configure/advanced/system-information/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Informations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/configure/advanced/performance/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Performances
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/configure/advanced/administration/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\"";
        // line 1009
        echo " data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/configure/advanced/emails/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/configure/advanced/import/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Importer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/configure/advanced/employees/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Équipe
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/configure/advanced/sql-requests/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Base de données
                                </a>
                              </li>

                                                                                 ";
        // line 1038
        echo " 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/configure/advanced/logs/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/configure/advanced/webservice-keys/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/akimpresta/admin587p4mg5u/index.php/configure/advanced/feature-flags/?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" class=\"link\"> Fonctionnalités expérimentales
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
     ";
        // line 1078
        echo "   <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Catalogue</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/akimpresta/admin587p4mg5u/index.php/sell/catalog/products?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\" aria-current=\"page\">Produits</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Produits          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/akimpresta/admin587p4mg5u/index.php/sell/catalog/products/new?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\"                  title=\"Créer un nouveau produit : CTRL+P\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Nouveau produit
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help\" href=\"https://help.prestashop.com/fr/doc/AdminProducts?version=1.7.8.11&amp;country=fr\" title=\"Aide\">
                  Aide
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add\"
  ";
        // line 1127
        echo "            href=\"/akimpresta/admin587p4mg5u/index.php/sell/catalog/products/new?_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ\"              title=\"Créer un nouveau produit : CTRL+P\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Nouveau produit
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help\" href=\"https://help.prestashop.com/fr/doc/AdminProducts?version=1.7.8.11&amp;country=fr\" title=\"Aide\">
              Aide
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Optimiser le catalogue de produits',
        'description': \"Rendez vos produits plus visibles et créez des pages de produits qui convertissent.<br>\\n                Voici une sélection de modules, <\\strong>compatibles avec votre boutique<\\/strong>, pour vous aider à atteindre vos objectifs.\",
        'Close': 'Fermer',
      },
      recommendedModulesUrl: '/akimpresta/admin587p4mg5u/index.php/modules/addons/modules/recommended?tabClassName=AdminProducts&_token=bNEcRuZPBWXyg_Gj8BJ1buyOQAanqb0naZUYm9mV_iQ',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>


</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1169
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://localhost/akimpresta/admin587p4mg5u/index.php?controller=AdminDashboard&amp;token=18dd8c368b7be72fe4856d87853adafa\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=paulinlawson3%40gmail.com&amp;firstname=Paulin&amp;lastname=LAWSON&amp;website=http%3A%2F%2Flocalhost%2Fakimpresta%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/akimpresta/admin587p4mg5u/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr /";
        // line 1216
        echo ">
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=paulinlawson3%40gmail.com&amp;firstname=Paulin&amp;lastname=LAWSON&amp;website=http%3A%2F%2Flocalhost%2Fakimpresta%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t";
        // line 1257
        echo "<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1277
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 101
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1169
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1277
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__8211f8d7c44d0357f6a48e369e538e9db55c05903a41f5d67ba71cd69432cdb4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1435 => 1277,  1418 => 1169,  1409 => 101,  1400 => 1277,  1378 => 1257,  1335 => 1216,  1282 => 1169,  1238 => 1127,  1187 => 1078,  1145 => 1038,  1114 => 1009,  1082 => 979,  1050 => 949,  1019 => 920,  983 => 886,  951 => 856,  918 => 825,  886 => 795,  852 => 763,  819 => 732,  789 => 704,  758 => 675,  727 => 646,  687 => 608,  656 => 579,  625 => 550,  591 => 518,  558 => 487,  527 => 458,  493 => 426,  463 => 398,  424 => 361,  394 => 333,  350 => 291,  302 => 245,  245 => 190,  229 => 176,  187 => 136,  147 => 101,  127 => 83,  107 => 65,  82 => 42,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__8211f8d7c44d0357f6a48e369e538e9db55c05903a41f5d67ba71cd69432cdb4", "");
    }
}
