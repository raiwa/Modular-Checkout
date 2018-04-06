# Modular-Checkout

Exposé:

- Leave the checks and security part between includes application_top.php and includes template_top.php in the main page files.
- Leave the forms in main page file
- Move only the content part between includes template_top.php and includes template_bottom.php into content modules
- Suggested modules:

1.   Checkout shipping and payment:

    -  page header <i>DONE @Dan Cole</i> [Sort order=100]
    -  address (1 module) <i>DONE @raiwa</i> [Sort order=200]
    -  shipping/payment methods <i>DONE @raiwa</i> [Sort order=300]
-  comments <i>DONE @raiwa</i> [Sort order=400]
-  continue button <i>DONE @raiwa</i> [Sort order=500]
-  progress line <i>DONE @Dan Cole</i>  [Sort order=600]

2.   Checkout confirmation:

    -  page header <i>@Dan Cole</i> [Sort order=100]
    -  products+ot [Sort order=200] <i>@piernas</i> [Sort order=200]
    -  delivery address <i>@raiwa</i> [Sort order=300]
    -  payment address <i>@raiwa</i> [Sort order=400]
    -  shipping method <i>@raiwa</i> [Sort order=500]
    -  payment method <i>@raiwa</i> [Sort order=600]
    -  payment information <i>@raiwa</i> [Sort order=700]
    -  comments <i>DONE @raiwa</i> [Sort order=800]
    -  confirm order button <i>DONE @raiwa</i> [Sort order=900]
    -  progress line <i>DONE @Dan Cole</i> [Sort order=1000]

3.   Checkout shipping/payment address (optional)

    - page header <i>@Dan Cole</i> [Sort order=100]
    - address (1 module) [Sort order=200]
    - new shipping/billing address [Sort order=300]
    - continue button <i>DONE @raiwa</i> [Sort order=400]	
    - progress line <i>DONE @Dan Cole</i> [Sort order=500]
    
    
4.   doubts/to decide:

    - address block in checkout_shipping/payment: 1 or 3 modules
    - shipping/payment address block in checkout_confirmation: 1 or 4 modules (or 2)
    
5.   checks/tests to be performed:    
    - <div class="clearfix"></div> in step wizard module: disturbs/needed if sort order is changed?
    
    Please self asign in comment or in this forum:
    https://forums.oscommerce.com/topic/412758-modular-checkout/?tab=comments#comment-1768187
    
