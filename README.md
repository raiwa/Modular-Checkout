# Modular-Checkout

Exposé:

- Leave the checks and security part between includes application_top.php and includes template_top.php in the main page files.
- Leave the forms in main page file
- Move only the content part between includes template_top.php and includes template_bottom.php into content modules
- Suggested modules:

1.   Checkout shipping and payment:

    -  page header [Sort order=100]
    -  address (2 modules) <i>@raiwa</i> [Sort order=200] [Sort order=300]
    -  shipping/payment methods <i>DONE @raiwa</i> [Sort order=400]
-  comments <i>DONE @raiwa</i> [Sort order=500]
-  continue button <i>DONE @raiwa</i> [Sort order=600]
    -  progress line <i>@Dan Cole</i>  [Sort order=700]

2.   Checkout confirmation:

    -  page header [Sort order=100]
    -  products+ot [Sort order=200]
    -  delivery address [Sort order=300]
    -  payment address [Sort order=400]
    -  shipping method [Sort order=500]
    -  payment method [Sort order=600]
    -  payment information [Sort order=700]
    -  comments <i>DONE @raiwa</i> [Sort order=800]
    -  confirm order button <i>DONE @raiwa</i> [Sort order=900]
-  progress line <i>DONE @Dan Cole</i> [Sort order=1000]

3.   Checkout shipping/payment address (optional)

    - page header [Sort order=100]
    - address (2 modules) [Sort order=200] [Sort order=300]
    - new shipping/billing address [Sort order=400]
    - continue button <i>DONE @raiwa</i> [Sort order=500]
-  progress line <i>DONE @Dan Cole</i> [Sort order=600]
    
    Please self asign in comment or in this forum:
    https://forums.oscommerce.com/topic/412758-modular-checkout/?tab=comments#comment-1768187
    
