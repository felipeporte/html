<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__234bd238f82a6966e018dfb94ac2dbdc */
class __TwigTemplate_2dcd22215b7222234c4b6b327ae6ddb9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

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
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Importar • hwm</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminImport';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'CL';
    var _PS_VERSION_ = '8.1.3';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '5d4d1e08c58dde506cd761b0055f4681';
    var currentIndex = 'index.php?controller=AdminImport';
    var employee_token = 'c808c76555b69752574b3cd4dd4363d9';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/bo/index.php/improve/modules/manage?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ';
    var admin_notification_get_link = '/bo/index.php/common/notifications?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ';
    var admin_notification_push_link = adminNotificationPushLink = '/bo/index.php/common/notifications/ack?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización correcta';
    var search_product_msg = 'Buscar un producto';
  ";
        // line 44
        echo "</script>



<link
      rel=\"preload\"
      href=\"/bo/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/bo/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/bo/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/bo/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/ph_simpleblog/css/simpleblog-admin.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/iqitelementor/views/css/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/bo\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/bo\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\";
var currency = {\"iso_code\":\"CLP\",\"sign\":\"\$\",\"name\":\"Peso chileno\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"CLP\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":0,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var iqitModulesAdditionalTabs = {\"ajaxUrl\":\"http:\\/\\/localhost:8081\\/bo\\/index.php?controller=AdminModules&token=8ffd9825bd8ccddd6966eec1257da9f0&ajax=1&configure=iqitadditionaltabs\"};
var iqitModulesSizeCharts = {\"ajaxUrl\":\"http:\\/\\/localhost:8081\\/bo\\/index.php?controller=AdminModules&token=8ffd9825bd8ccddd6966eec1257da9f0&ajax=1&configure=iqitsizecharts\"};
var number_specifications = {\"symbol\":[\"";
        // line 70
        echo ",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/bo/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.3\"></script>
<script type=\"text/javascript\" src=\"/bo/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.3\"></script>
<script type=\"text/javascript\" src=\"/bo/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/bo/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/bo/index.php/common/notifications?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 104
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-es adminimport\"
  data-base-url=\"/bo/index.php\"  data-token=\"dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8081/bo/index.php?controller=AdminDashboard&amp;token=2fd698186508f984f23b7a99847ecb5d\"></a>
      <span id=\"shop_version\">8.1.3</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8081/bo/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=8d20f3cee9dbc669e35cd03eccab9ef9\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8081/bo/index.php/improve/modules/manage?token=d8663ccde2d70a9c914ad063378c73fd\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8081/bo/index.php/sell/catalog/categories/new?token=d8663ccde2d70a9c914ad063378c73fd\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost:8081/bo/index.php/sell/catalog/products-v2/create?token=d8663ccde2d70a9c914ad063378c73fd\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost";
        // line 142
        echo ":8081/bo/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1ea68c4dfe53963a2cec55e1ea983525\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost:8081/bo/index.php/sell/orders?token=d8663ccde2d70a9c914ad063378c73fd\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"4\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/import\"
        data-post-link=\"http://localhost:8081/bo/index.php?controller=AdminQuickAccesses&token=36d7a5b6e7e970caf557ae6f40163c5c\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Importar - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8081/bo/index.php?controller=AdminQuickAccesses&token=36d7a5b6e7e970caf557ae6f40163c5c\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/bo/index.php?controller=AdminSearch&amp;token=5244fc45708c76ebf58e596cfadc1a23\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referenci";
        // line 181
        echo "a de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material";
        // line 195
        echo "-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acceso rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8081/bo/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=8d20f3cee9dbc669e35cd03eccab9ef9\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8081/bo/index.php/improve/modules/manage?token=d8663ccde2d70a9c914ad063378c73fd\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8081/bo/index.php/sell/catalog/categories/new?token=d8663ccde2d70a9c914ad063378c73fd\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8081/bo/index.php/sell/catalog/products-v2/create?token=d8663ccde2d70a9c914ad063378c73fd\"
             data-item=\"Nuevo\"
    >Nuevo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8081/bo/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=1ea68c4dfe53963a2cec55e1ea983525\"
             data-item=\"Nuevo cupón de descuento\"
    >Nuevo cupón de descuento</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost:8081/bo/index.php/sell/orders?token=d8663ccde2d70a9c914ad063378c73fd\"
             data-item=\"Pedidos\"
    >Pe";
        // line 237
        echo "didos</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"109\"
      data-icon=\"icon-AdminAdvancedParameters\"
      data-method=\"add\"
      data-url=\"index.php/configure/advanced/import\"
      data-post-link=\"http://localhost:8081/bo/index.php?controller=AdminQuickAccesses&token=36d7a5b6e7e970caf557ae6f40163c5c\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"Importar - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Añadir página actual al Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost:8081/bo/index.php?controller=AdminQuickAccesses&token=36d7a5b6e7e970caf557ae6f40163c5c\">
    <i class=\"material-icons\">settings</i>
    Administrar accesos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost:8081/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver mi tienda</span>
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
        ";
        // line 286
        echo "      id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
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
            >
              Clientes<span id=\"_nb_new_customers_\"></span>
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
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"http://localhost:8081/bo/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=7bc9ca8b9a7d2966c029c942adc35076\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"no";
        // line 335
        echo "tification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
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
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost:8081/img/pr/default.jpg\" alt=\"Felipe\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, Felipe</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=";
        // line 385
        echo "\"/bo/index.php/configure/advanced/employees/1/edit?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost:8081/bo/index.php?controller=AdminLogin&amp;logout=1&amp;token=e5dafa55971d702cc1eda88ebc244585\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/bo/index.php/configure/advanced/employees/toggle-navigation?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost:8081/bo/index.php?controller=AdminDashboard&amp;token=2fd698186508f984f23b7a99847ecb5d\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.3</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost:8081/bo/index.php?controller=AdminDashboard&amp;token=2fd698186508f984f23b7a99847ecb5d\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
               ";
        // line 438
        echo "   
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/bo/index.php/sell/orders/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/bo/index.php/sell/orders/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/bo/index.php/sell/orders/invoices/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                  ";
        // line 470
        echo "          
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/bo/index.php/sell/orders/credit-slips/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/bo/index.php/sell/orders/delivery-slips/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost:8081/bo/index.php?controller=AdminCarts&amp;token=7bc9ca8b9a7d2966c029c942adc35076\" class=\"link\"> Carritos de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/bo/index.php/sell/catalog/products?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
             ";
        // line 502
        echo "         Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/bo/index.php/sell/catalog/products?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/bo/index.php/sell/catalog/categories?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/bo/index.php/sell/catalog/monitoring/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                   ";
        // line 533
        echo "               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost:8081/bo/index.php?controller=AdminAttributesGroups&amp;token=602048bb0b46ed1acd80454044a5412e\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/bo/index.php/sell/catalog/brands/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/bo/index.php/sell/attachments/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost:8081/bo/index.php?controller=AdminCartRules&amp;token=1ea68c4dfe53963a2cec55e1ea983525\" class=\"link\"> Descuentos
                            ";
        // line 562
        echo "    </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/bo/index.php/sell/stocks/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/bo/index.php/sell/customers/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/bo/index.php/sell/customers/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\">";
        // line 594
        echo " Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/bo/index.php/sell/addresses/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost:8081/bo/index.php?controller=AdminCustomerThreads&amp;token=fa514dc990492fd0abfde787f108e8ee\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
        ";
        // line 627
        echo "                        <a href=\"http://localhost:8081/bo/index.php?controller=AdminCustomerThreads&amp;token=fa514dc990492fd0abfde787f108e8ee\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/bo/index.php/sell/customer-service/order-messages/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost:8081/bo/index.php?controller=AdminReturn&amp;token=f85c1090560dd1875ade6bb055d0866d\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://localhost:8081/bo/index.php?controller=AdminStats&amp;token=8d20f3cee9dbc669e35cd03eccab9ef9\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
           ";
        // line 659
        echo "                                         <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/bo/index.php/improve/modules/manage?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/bo/index.php/improve/modules/manage?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Administrador de módulos
                                </a>";
        // line 694
        echo "
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/bo/index.php/improve/design/themes/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/bo/index.php/improve/design/themes/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Tema y logotipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/bo/index.php/improve/design/mail_theme/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTP";
        // line 726
        echo "jLIWKbZOPQ\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/bo/index.php/improve/design/cms-pages/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/bo/index.php/improve/design/modules/positions/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost:8081/bo/index.php?controller=AdminImages&amp;token=d2c2e403392a0870e5c7c1889cf31c2d\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"136\" id=\"subtab-AdminParentIqitE";
        // line 757
        echo "lementor\">
                                <a href=\"http://localhost:8081/bo/index.php?controller=AdminIqitElementor&amp;token=50e4e56021dfed3ade0a8c0cdd80bdf7\" class=\"link\"> IqitElementor - Page builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"141\" id=\"subtab-IqitFrontThemeEditor\">
                                <a href=\"http://localhost:8081/bo/index.php?controller=IqitFrontThemeEditor&amp;token=57ded7d2501ec504367f1254c6da180d\" class=\"link\"> IqitThemeEditor - Live
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"142\" id=\"subtab-AdminIqitThemeEditor\">
                                <a href=\"http://localhost:8081/bo/index.php?controller=AdminIqitThemeEditor&amp;token=2fdf7ad000c22e8ff6e94a197371f18d\" class=\"link\"> IqitThemeEditor - Backoffice
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost:8081/bo/index.php?controller=AdminCarriers&amp;token=03371e214746ce93423c1232ed1af723\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
             ";
        // line 787
        echo "         <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost:8081/bo/index.php?controller=AdminCarriers&amp;token=03371e214746ce93423c1232ed1af723\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/bo/index.php/improve/shipping/preferences/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/bo/index.php/improve/payment/payment_methods?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\">";
        // line 818
        echo "
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/bo/index.php/improve/payment/payment_methods?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/bo/index.php/improve/payment/preferences?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/bo/index.php/improve/interna";
        // line 851
        echo "tional/localization/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/bo/index.php/improve/international/localization/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/bo/index.php/improve/international/zones/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a h";
        // line 881
        echo "ref=\"/bo/index.php/improve/international/taxes/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/bo/index.php/improve/international/translations/settings?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"143\" id=\"subtab-AdminBlogForPrestaShop\">
                    <a href=\"http://localhost:8081/bo/index.php?controller=AdminSimpleBlogPosts&amp;token=63a79d79896ce491fe52e99e7100ac19\" class=\"link\">
                      <i class=\"material-icons mi-note\">note</i>
                      <span>
                      Blog for PrestaShop
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-143\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                          ";
        // line 913
        echo "    <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminSimpleBlogPosts\">
                                <a href=\"http://localhost:8081/bo/index.php?controller=AdminSimpleBlogPosts&amp;token=63a79d79896ce491fe52e99e7100ac19\" class=\"link\"> Posts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminSimpleBlogCategories\">
                                <a href=\"http://localhost:8081/bo/index.php?controller=AdminSimpleBlogCategories&amp;token=8b1140057d08dd0d9e5c039e7eed6afc\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"146\" id=\"subtab-AdminSimpleBlogComments\">
                                <a href=\"http://localhost:8081/bo/index.php?controller=AdminSimpleBlogComments&amp;token=2344144f050f6a25c868147c7ebf12c3\" class=\"link\"> Comments
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminSimpleBlogTags\">
                                <a href=\"http://localhost:8081/bo/index.php?controller=AdminSimpleBlogTags&amp;token=67b263e0ea411fcc898350eaad2d1927\" class=\"link\"> Tags
                                </a>
                              </li>

                                                           ";
        // line 942
        echo "                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"148\" id=\"subtab-AdminSimpleBlogAuthors\">
                                <a href=\"http://localhost:8081/bo/index.php?controller=AdminSimpleBlogAuthors&amp;token=dea71bd912dbcdf7527939edb2764cd7\" class=\"link\"> Autores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminSimpleBlogSettings\">
                                <a href=\"http://localhost:8081/bo/index.php?controller=AdminSimpleBlogSettings&amp;token=8da289a1fb8fb5ec01c602d7254e4165\" class=\"link\"> Settings
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/bo/index.php/configure/shop/preferences/preferences?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>";
        // line 979
        echo "
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/bo/index.php/configure/shop/preferences/preferences?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/bo/index.php/configure/shop/order-preferences/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Configuración de pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/bo/index.php/configure/shop/product-preferences/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

              ";
        // line 1009
        echo "                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/bo/index.php/configure/shop/customer-preferences/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Configuración de clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/bo/index.php/configure/shop/contacts/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/bo/index.php/configure/shop/seo-urls/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost:8081/bo/index.php?controller=AdminSearchConf&amp;token=c9f1bb6134199181502029257ef6f678\" class";
        // line 1037
        echo "=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/bo/index.php/configure/advanced/system-information/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/bo/index.php/configure/advanced/system-information/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-le";
        // line 1069
        echo "veltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/bo/index.php/configure/advanced/performance/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/bo/index.php/configure/advanced/administration/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/bo/index.php/configure/advanced/emails/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/bo/index.php/configure/advanced/import/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                         ";
        // line 1100
        echo "                   
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/bo/index.php/configure/advanced/employees/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/bo/index.php/configure/advanced/sql-requests/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/bo/index.php/configure/advanced/logs/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Registros/Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/bo/index.php/configure/advanced/webservice-keys/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                    ";
        // line 1130
        echo "                                                                                                                                                                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/bo/index.php/configure/advanced/feature-flags/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Características nuevas y experimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/bo/index.php/configure/advanced/security/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" class=\"link\"> Seguridad
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"130\" id=\"tab-AdminRevslider\">
                <span class=\"title\">Slider Revolution</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"131\" id=\"subtab-AdminRevsliderSliders\">
                    <a href=\"http://localhost:8081/bo/index.php?controller=AdminRevsliderSliders&amp;token=800749f466037b2b36b0be07f8d7c168\" class=\"link\">
                      <i class=\"material-icon";
        // line 1164
        echo "s mi-extension\">extension</i>
                      <span>
                      Slider Revolution
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Parámetros Avanzados</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/bo/index.php/configure/advanced/import/?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\" aria-current=\"page\">Importar</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Importar          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/bo/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminImport%253Fversion%253D8.1.3%2526country%253Des/Ayuda?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button ";
        // line 1228
        echo "class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/bo/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminImport%253Fversion%253D8.1.3%2526country%253Des/Ayuda?_token=dAFR1oJy269kOVzHHYLhQwYNkHoOutSTPjLIWKbZOPQ\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1260
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://localhost:8081/bo/index.php?controller=AdminDashboard&amp;token=2fd698186508f984f23b7a99847ecb5d\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1294
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 104
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1260
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1294
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__234bd238f82a6966e018dfb94ac2dbdc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1461 => 1294,  1440 => 1260,  1429 => 104,  1420 => 1294,  1380 => 1260,  1346 => 1228,  1280 => 1164,  1244 => 1130,  1212 => 1100,  1179 => 1069,  1145 => 1037,  1115 => 1009,  1083 => 979,  1044 => 942,  1013 => 913,  979 => 881,  947 => 851,  912 => 818,  879 => 787,  847 => 757,  814 => 726,  780 => 694,  743 => 659,  709 => 627,  674 => 594,  640 => 562,  609 => 533,  576 => 502,  542 => 470,  508 => 438,  453 => 385,  401 => 335,  350 => 286,  299 => 237,  255 => 195,  239 => 181,  198 => 142,  155 => 104,  119 => 70,  91 => 44,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__234bd238f82a6966e018dfb94ac2dbdc", "");
    }
}
