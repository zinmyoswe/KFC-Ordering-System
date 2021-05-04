<!DOCTYPE html>
<html>
<head>
        <title>Odoo</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta http-equiv="content-type" content="text/html, charset=utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">

        <link rel="shortcut icon" sizes="196x196" href="https://demo3.odoo.com/point_of_sale/static/src/img/touch-icon-196.png">
        <link rel="shortcut icon" sizes="128x128" href="https://demo3.odoo.com/point_of_sale/static/src/img/touch-icon-128.png">
        <link rel="apple-touch-icon" href="https://demo3.odoo.com/point_of_sale/static/src/img/touch-icon-iphone.png">
        <link rel="apple-touch-icon" sizes="76x76" href="https://demo3.odoo.com/point_of_sale/static/src/img/touch-icon-ipad.png">
        <link rel="apple-touch-icon" sizes="120x120" href="https://demo3.odoo.com/point_of_sale/static/src/img/touch-icon-iphone-retina.png">
        <link rel="apple-touch-icon" sizes="152x152" href="https://demo3.odoo.com/point_of_sale/static/src/img/touch-icon-ipad-retina.png">

        <style> body { background: #222; } </style>

        <link rel="shortcut icon" href="https://demo3.odoo.com/web/image/res.company/1/favicon/" type="image/x-icon">

        <script type="text/javascript">
            var odoo = {"csrf_token": "aaec65b31fe3dca087c56170ae2929c56175ecado1646971538", "session_info": {"uid": 2, "is_system": true, "is_admin": true, "user_context": {"lang": "en_US", "tz": "Europe/Brussels", "uid": 2, "allowed_company_ids": [1]}, "db": "demo_140_1615428979", "server_version": "14.0+e", "server_version_info": [14, 0, 0, "final", 0, "e"], "name": "Mitchell Admin", "username": "admin", "partner_display_name": "YourCompany, Mitchell Admin", "company_id": 1, "partner_id": 3, "web.base.url": "https://demo3.odoo.com", "active_ids_limit": 20000, "user_companies": {"current_company": [1, "Demo Company"], "allowed_companies": [[2, "My Company (Chicago)"], [1, "Demo Company"]]}, "currencies": {"1": {"symbol": "\u20ac", "position": "after", "digits": [69, 2]}, "2": {"symbol": "$", "position": "before", "digits": [69, 2]}}, "show_effect": "True", "display_switch_company_menu": true, "cache_hashes": {"load_menus": "3e833fa84530929e6cc5399a0a0339d3fbb60e9840b3cc1008c4ef13e3c97377", "qweb": "b1b7524cf7d77377e007120efd254b37347591129a1f2955732f76e6811cc72d", "translations": "5227498d9df4b403b0244c75aac21e0c091e50ce"}, "user_id": [2], "max_time_between_keys_in_ms": 55, "company_currency_id": 2, "companies_currency_id": {"2": 2, "1": 2}, "warning": "admin", "expiration_date": false, "expiration_reason": false, "web_tours": [], "notification_type": "email", "map_box_token": false, "odoobot_initialized": true, "ocn_token_key": false, "fcm_project_id": false, "inbox_action": 116, "dbuuid": "d1d40526-820f-11eb-97dd-698350221ca6", "multi_lang": false, "timesheet_uom": {"id": 6, "name": "Hours", "rounding": 0.01, "timesheet_widget": "float_time"}, "timesheet_uom_factor": 1.0}, "login_number": 1, "debug": ""};
        </script>

        
    <link type="text/css" rel="stylesheet" href="https://demo3.odoo.com/web/content/1655-3a503a5/point_of_sale.assets.css" data-asset-xmlid="point_of_sale.assets" data-asset-version="3a503a5">
    <script type="text/javascript" src="https://demo3.odoo.com/web/content/1630-056e26d/web.assets_common.js" data-asset-xmlid="web.assets_common" data-asset-version="056e26d"></script>
    <script type="text/javascript" src="https://demo3.odoo.com/web/content/1656-3f79eb8/point_of_sale.pos_assets_backend.js" data-asset-xmlid="point_of_sale.pos_assets_backend" data-asset-version="3f79eb8"></script>
    <script type="text/javascript" src="https://demo3.odoo.com/web/content/1657-3a503a5/point_of_sale.assets.js" data-asset-xmlid="point_of_sale.assets" data-asset-version="3a503a5"></script>

        
        
    
        <script type="text/javascript" src="https://demo3.odoo.com/point_of_sale/static/src/js/main.js"></script>
    <script type="text/javascript" src="https://demo3.odoo.com/web/webclient/locale/en_US"></script><link href="https://demo3.odoo.com/point_of_sale/static/src/css/chrome50.css" rel="stylesheet" type="text/css"></head>


    <body class="">
    

<div class="o_loading" style="display: none;">Loading</div><div class="o_action_manager"><div class="pos"><div class="pos-receipt-print"></div><div class="pos-topheader"><div class="pos-branding"><img src="https://demo3.odoo.com/point_of_sale/static/src/img/logo.png" alt="Logo" class="pos-logo"><div class="ticket-button"><div badge="1" class="with-badge"><i aria-hidden="true" class="fa fa-ticket"></i></div><div>Orders</div></div></div><div class="pos-rightheader"><span></span><div class="search-bar-portal"><div class="search-box"><span class="icon"><i class="fa fa-search"></i></span><span class="clear-icon"><i aria-hidden="true" class="fa fa-times"></i></span><input type="text" placeholder="Search Products..."></div></div><div class="status-buttons-portal"><div class="status-buttons"><div class="oe_status"><span class="username">Mitchell Admin</span></div><div class="oe_status"><div class="js_connected oe_icon oe_green"><i role="img" aria-label="Synchronisation Connected" title="Synchronisation Connected" class="fa fa-fw fa-wifi"></i></div></div><div class="header-button close_button">Close</div></div></div></div></div><portal></portal><div class="pos-content"><div class="window"><div class="subwindow"><div class="subwindow-container"><div class="subwindow-container-fix screens"><div class="product-screen screen"><div class="screen-full-width"><div class="leftpane"><div class="order-container"><div class="order"><div class="order-empty"><i role="img" aria-label="Shopping cart" title="Shopping cart" class="fa fa-shopping-cart"></i><h1>This order is empty</h1></div></div></div><div class="pads"><div class="control-buttons"><span class="control-button"><i class="fa fa-star"></i><span> </span><span>Reward</span></span></div><div class="subpads"><div class="actionpad"><button class="button set-customer"><i role="img" aria-label="Customer" title="Customer" class="fa fa-user"></i> Customer </button><button class="button pay"><div class="pay-circle"><i role="img" aria-label="Pay" title="Pay" class="fa fa-chevron-right"></i></div> Payment </button></div><div class="numpad"><button class="input-button number-char">1</button><button class="input-button number-char">2</button><button class="input-button number-char">3</button><button class="mode-button selected-mode">Qty</button><br><button class="input-button number-char">4</button><button class="input-button number-char">5</button><button class="input-button number-char">6</button><button class="mode-button">Disc</button><br><button class="input-button number-char">7</button><button class="input-button number-char">8</button><button class="input-button number-char">9</button><button class="mode-button">Price</button><br><button class="input-button numpad-minus">+/-</button><button class="input-button number-char">0</button><button class="input-button number-char">.</button><button class="input-button numpad-backspace"><img style="pointer-events: none;" src="https://demo3.odoo.com/point_of_sale/static/src/img/backspace.png" width="24" height="21" alt="Backspace"></button></div></div></div></div><div class="rightpane"><div class="products-widget"><div class="products-widget-control"><div class="rightpane-header green-border-bottom"><div class="breadcrumbs"><span class="breadcrumb"><span class="breadcrumb-button breadcrumb-home"><i role="img" aria-label="Home" title="Home" class="fa fa-home"></i></span></span><span class="breadcrumb"><img src="https://demo3.odoo.com/point_of_sale/static/src/img/bc-arrow-big.png" alt="Slash" class="breadcrumb-arrow"><span class="breadcrumb-button">Chairs</span></span></div></div><portal></portal></div><div class="product-list-container"><div class="product-list"><article tabindex="0" data-product-id="23" aria-labelledby="article_product_23" class="product"><div class="product-img"><img src="https://demo3.odoo.com/web/image?model=product.product&amp;field=image_128&amp;id=23&amp;write_date=2021-03-11 02:16:45&amp;unique=1" alt="Conference Chair (CONFIG) (Steel)"><span class="price-tag">$ 16.50</span></div><div id="article_product_23" class="product-name">Conference Chair (CONFIG) (Steel)</div></article><article tabindex="0" data-product-id="24" aria-labelledby="article_product_24" class="product"><div class="product-img"><img src="https://demo3.odoo.com/web/image?model=product.product&amp;field=image_128&amp;id=24&amp;write_date=2021-03-11 02:16:45&amp;unique=1" alt="Conference Chair (CONFIG) (Aluminium)"><span class="price-tag">$ 22.90</span></div><div id="article_product_24" class="product-name">Conference Chair (CONFIG) (Aluminium)</div></article><article tabindex="0" data-product-id="25" aria-labelledby="article_product_25" class="product"><div class="product-img"><img src="https://demo3.odoo.com/web/image?model=product.product&amp;field=image_128&amp;id=25&amp;write_date=2021-03-11 03:17:13&amp;unique=1" alt="Office Chair Black"><span class="price-tag">$ 12.50</span></div><div id="article_product_25" class="product-name">Office Chair Black</div></article><article tabindex="0" data-product-id="5" aria-labelledby="article_product_5" class="product"><div class="product-img"><img src="https://demo3.odoo.com/web/image?model=product.product&amp;field=image_128&amp;id=5&amp;write_date=2021-03-11 02:16:45&amp;unique=1" alt="Office Chair"><span class="price-tag">$ 70.00</span></div><div id="article_product_5" class="product-name">Office Chair</div></article></div></div></div></div></div></div></div></div></div></div></div></div></div></body>

</html>