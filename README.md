# Modular-Checkout

Exposé:

- Leave the checks and security part between includes application_top.php and includes template_top.php in the main page files.
- Leave the forms in main page file
- Move only the content part between includes template_top.php and includes template_bottom.php into content modules
- Suggested modules:

1.   Checkout shipping and payment: DONE 

    -  page header <i>DONE @Dan Cole</i> [Sort order=100]
    -  address (1 module) <i>DONE @raiwa</i> [Sort order=200]
    -  shipping/payment methods <i>DONE @raiwa</i> [Sort order=300]
-  comments <i>DONE @raiwa</i> [Sort order=400]
-  continue button <i>DONE @raiwa</i> [Sort order=500]
-  progress line <i>DONE @Dan Cole</i>  [Sort order=600]

2.   Checkout confirmation: DONE 

    -  page header <i>DONE @Dan Cole</i> [Sort order=100]
    -  products+ot <i>DONE @raiwa @piernas</i> [Sort order=200]
    -  summary  <i>DONE @raiwa @piernas</i> [Sort order=300]
    -  payment information <i>DONE @raiwa @piernas</i> [Sort order=400]
    -  comments <i>DONE @raiwa</i> [Sort order=500]
    -  confirm order button <i>DONE @raiwa</i> [Sort order=600]
    -  progress line <i>DONE @Dan Cole</i> [Sort order=700]

3.   Checkout shipping/payment address (optional) DONE 

    - page header <i>DONE @Dan Cole</i> [Sort order=100]
    - address (1 module) <i>DONE @raiwa</i> [Sort order=200]
    - address book entries (1 module) <i>DONE @raiwa</i> [Sort order=300]
    - new shipping/billing address <i>DONE @raiwa</i> [Sort order=400]
    - continue and back button <i>DONE @raiwa</i> [Sort order=500]	
    - progress line <i>DONE @Dan Cole</i> [Sort order=600]
    
    
4.   doubts/to decide:

    - address block in checkout_shipping/payment: 1 or 3 modules
    - shipping/payment address block in checkout_confirmation: 1 or 4 modules (or 2)
    - old "checkout_new_address.php" module: call in modules via "include" DECIDED
    
5.   checks/tests to be performed, DONE:    
    - remove class="clearfix"line in all modules
    
6.   fork complete branch from Gary's master:    
    - add install/configuration sql for all modules to install/oscommerce.sql
    
    
    Please self asign in comment or in this forum:
    https://forums.oscommerce.com/topic/412758-modular-checkout/?tab=comments#comment-1768187
    
