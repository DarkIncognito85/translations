<?php
/**$
    Shop - en_GB
    CLIENTXCMS Translator system - Exported on 2023-06-27 12:56:41
    If you want to help you translate into your language, you can contact us via our support.
*/
return [
  'saved' => 'Saved',
  'your_services' => 'My services',
  'your_orders' => 'My orders',
  'your_quotes' => 'My quotes',
  'our_products' => 'Our products',
  'order_product' => 'Order',
  'remaining_time' => 'Remaining time',
  'order2' => 'Order',
  'day_orders' => 'Days orders',
  'active_services' => 'Active services',
  'see_product' => 'See products',
  'active' => 'Activation',
  'percentage' => 'Percentage',
  'coupon' => 'Coupon',
  'utilities' => 'Utilities',
  'cross_selling_title' => 'Products you might like',
  'instock' => '%count% in stock',
  'coupons' => 'Coupons',
  'services' => 'Services',
  'for' => 'For',
  'reason' => 'Reason',
  'vat' => 'VAT',
  'products' => 'Products',
  'groups' => 'Groups',
  'fromgroup' => 'From %price%',
  'group' => 'Group',
  'discounts' => 'Discounts',
  'servicestate' => [
    'Pending' => 'Delivery in process',
    'Online' => 'Online',
    'Terminated' => 'Terminated',
    'Suspended' => 'Suspended',
    'Expired' => 'Expired',
    'Refunded' => 'Refounded',
  ],
  'pdf' => [
    'title' => 'Invoice N° %createdat%-%id%',
    'totalht' => 'Subtotal: ',
    'deadline' => 'Payment Deadline',
    'qty' => 'Qty',
    'label' => 'Label',
    'totalvat' => 'VAT Total: ',
    'discount' => 'Discount: ',
    'totalprice' => 'Total Price: ',
    'payable' => 'Total Amount Due ',
  ],
  'couponmessages' => [
    'success' => 'Coupon added successfully',
    'error' => 'Coupon is invalid',
    'recalculate' => 'Coupon updated',
    'alreadyUsed' => 'You can\'t use the promo code twice!',
    'inactive' => 'This promo code is not active',
    'amount' => 'Cart amount must be at least %amount%',
    'items' => 'The cart must have at least %amount% Element',
    'need' => 'You must have the following services to add the promo code: %names%',
    'required' => 'You must have one of the following items to activate the discount: %names%.',
  ],
  'transactionstates' => [
    'Refused' => 'Refused',
    'Completed' => 'Completed',
    'Cancelled' => 'Cancelled',
    'Refunded' => 'Refunded',
    'Pending' => 'Pending',
    'Draft' => 'Draft',
  ],
  'serviceactions' => [
    'rename' => [
      'length' => 'Service name must be between 1 and 100 characters long.',
      'success' => 'Service name modified successfully.',
    ],
    'password' => [
      'length' => 'Service name must be 8 characters long.',
      'success' => 'Password modified successfully.',
      'error' => 'Cannot change password.',
    ],
    'recurring' => [
      'success' => 'Billing cycle modified successfully.',
      'error' => 'Cannot change billing cycle.',
      'discount' => 'You must wait for your %months% cycle(s) to end before you can change the billing cycle.',
    ],
    'renew' => [
      'success' => 'Renewal completed',
      'cancel' => 'Renewal canceled.',
      'manage' => 'Pay for the renewal of your service.',
      'renewinfo' => 'This service expires in %days% days. You can renew it by clicking on the button below to avoid a service interruption.',
      'warning' => 'Warning',
      'information' => 'Information',
    ],
    'transactions' => [
      'success' => 'Transaction completed.',
      'cancel' => 'Transaction cancelled.',
    ],
  ],
  'servicespage' => [
    'crontab' => 'If your service takes more than 3 minutes to deliver, check that <a href=\'%link%\'>your CRON tasks</a> are running correctly.',
    'renewbywallet' => 'Automatic renewal through the wallet',
    'renewtitle' => 'Renewal manager',
    'password' => 'Change password',
    'subscriptioninfo' => 'Your service will be renewed on %date% via direct debit from %method%.',
    'removetransactionitem' => 'Remove pending transaction',
    'renewwarning' => 'An invoice is to be paid to continue the subscription of the service.  <a href=\'%link%\'>Click here to pay for it</a>.After the expiration of the service it will be impossible to use the service.',
    'autoterminate' => 'End scheduled in',
    'cannotRenew' => 'Service limit cycle is reached',
    'suspend_expire' => 'Your service will expire %date%. After this period the service will be deleted from the server.',
    'created_at' => 'Created At',
    'recurring' => 'Recurring',
    'cycles' => 'Cycles',
    'maxcycles' => 'No. renewal max',
    'currentcycle' => 'No. current renewal',
    'expire_at' => 'Expire At',
    'recurringcycle' => 'Billing cycle',
    'servicename' => 'Service name',
    'title' => 'Service management',
    'noc' => 'Localization',
    'price' => 'Price',
    'changestate' => 'State changed successfully.',
    'renew' => 'Renew',
    'terminate' => 'Terminate',
    'suspend' => 'Suspend',
    'unsuspend' => 'Unsuspend',
    'refund' => 'Refund',
    'upgrade' => [
      'title' => 'Upgrade',
      'manage' => 'Upgrading your service',
      'actual' => 'Actual product',
      'btn' => 'Upgrade to this product',
    ],
    'subscription' => [
      'title' => 'Cancel subscription %method%',
      'title2' => 'Reactivate subscription %method%',
      'subtitle' => 'We will no longer automatically charge to renew your service.',
      'last4' => 'Last four digits of the card',
      'cancel' => 'Your subscription to your service has just been canceled',
      'lastpayment' => 'Your last direct debit dates back to %date%',
      'uncancel' => 'Your subscription to your service has just been reactivated. The next billing will be on %date%',
    ],
    'cancel' => [
      'title' => 'Cancel service',
      'subtitle' => 'Your service will stop on %date%',
      'reason' => 'Reason for cancellation',
      'button' => 'Stop',
      'uncancelbtn' => 'Resume',
      'uncancel' => 'Your service cancellation has just been cancelled',
      'cancel' => 'Your cancellation of service has just been requested',
    ],
  ],
  'order_comment' => [
    'label' => 'Comment',
    'placeholder' => 'Comment on your order.',
  ],
  'ordershow' => [
    'order' => [
      'title' => 'Order tracking N °%id%',
    ],
    'items' => [
      'title' => 'Order summary',
      'pending' => 'Delivery in preparation',
      'delivred' => 'Delivery made on %date%',
      'refunded' => 'Delivery refunded on %date%',
    ],
    'history' => [
      'title' => 'Your order history',
    ],
  ],
  'transactionpage' => [
    'issuedby' => 'Issued by',
    'delivred' => 'Delivery',
    'success' => 'Successully',
    'refunded' => 'Refunded',
    'pending2' => 'In delivery',
    'pending' => 'In progress',
    'make' => 'Pay now',
    'id' => 'Identifier',
    'info' => 'Transaction Information',
    'items' => 'No. items',
    'summary' => 'Order summary',
    'summarysub' => 'Not all items here can be deleted.',
  ],
  'converter' => [
    'title' => 'Converter',
    'mb' => 'Type your number in MB',
    'gb' => 'Type your number in GB',
  ],
  'options' => [
    'createcustom' => 'New custom option',
    'values' => 'Allowed values (Choose only)',
    'fieldname' => 'Field label',
    'title' => 'Additional options',
    'disk' => [
      'title' => 'Additional disk space',
    ],
    'ip' => [
      'title' => 'Additional IP address',
      'unit' => 'IP address(es)',
    ],
    'servername' => [
      'title' => 'Server name',
    ],
    'memory' => [
      'title' => 'Additional memory',
    ],
    'database' => [
      'title' => 'Additional database',
      'unit' => 'Database(s)',
    ],
    'core' => [
      'title' => 'Additional cores',
      'unit' => 'Core(s)',
    ],
    'backup' => [
      'title' => 'Additional backup',
      'unit' => 'Backup(s)',
    ],
    'allocation' => [
      'title' => 'Additional allocation',
      'unit' => 'Allocation(s)',
    ],
    'bandwidth' => [
      'title' => 'Server bandwidth',
      'unit' => 'gb/s',
    ],
    'server' => [
      'title' => 'Additional server',
      'unit' => 'Server(s)',
    ],
    'swap' => [
      'title' => 'Additional swap',
      'unit' => 'options.swap.unit',
    ],
    'additional' => 'Additional',
    'unit_price' => 'Unit price',
    'min_value' => 'Minimum value',
    'min_valuesub' => '(0 recommended for an additional option, 3 for a required option)',
    'max_value' => 'Maximum value',
  ],
  'best_sales' => 'Best sales',
  'discount' => 'Discount',
  'your_order' => 'Your order',
  'your_quote' => 'Your quote',
  'your_transactions' => 'Your transactions',
  'coupon_input' => 'Coupon code',
  'checkout_empty' => 'You currently have no products in your order.',
  'checkout_subscription' => 'I request a subscription to automatically renew the service if possible by the payment method',
  'errorallowqty' => 'You cannot order the product %productname% a second time!',
  'must_auth' => 'You must be logged in to order',
  'must_confirmed' => 'You must be confirmed to order',
  'free' => 'Free',
  'onetime' => 'One time',
  'recurring' => 'Recurrent',
  'deals' => 'Deals',
  'pay_with' => 'Pay with',
  'payment_cancel' => 'Payment cancelled successfully.',
  'order' => 'Order',
  'paymenttype' => 'Payment type',
  'domaindata' => [
    'title' => 'Choose domain',
    'headingUpdate' => 'Using an existing domain name and updating name servers',
    'headingSubdomain' => 'Use a sub-domain of %app_name%',
  ],
  'note' => 'Note',
  'walletinsufficient' => 'Your balance is insufficient',
  'quotestate' => [
    'Refused' => 'Refused',
    'Accepted' => 'Accepted',
    'Pending' => 'Pending',
    'Draft' => 'Draft',
  ],
  'return' => [
    'title' => 'Tracking your order',
    'btn' => 'More details',
    'Pending' => [
      'state' => 'Pending',
      'title' => 'Order placed on hold.',
      'content' => 'Your order has just been put on hold.',
    ],
    'Draft' => [
      'state' => 'Draft',
      'title' => 'Order Drafted.',
      'content' => 'Your order has just been drafted.',
    ],
    'Completed' => [
      'state' => 'Completed',
      'title' => 'Order validated successfully.',
      'content' => 'Your order has just been validated',
    ],
    'Cancelled' => [
      'state' => 'Cancelled',
      'title' => 'Order cancelled.',
      'content' => 'Your order has just been cancelled.',
    ],
    'Refused' => [
      'state' => 'Refused',
      'title' => 'Order refused.',
      'content' => 'Please contact support for more information.',
    ],
    'Refunded' => [
      'state' => 'Refunded',
      'title' => 'Order refunded.',
      'content' => 'Your order has just been refunded.',
    ],
  ],
  'shopadmin' => [
    'dashboard' => [
      'transactions' => 'Transactions made',
      'transactionmustbecancelled' => 'Products have been deleted, impossible to deliver some transactions. Cancel %ids% transactions to deliver other transactions awaiting delivery.',
    ],
    'payment' => [
      'subtitle' => 'If you want to add taxes directly to each payment in order to receive the exact amount of the transaction without the taxes added by the payment methods',
    ],
    'subscriptions' => [
      'title' => 'Subscriptions',
      'subtitle' => 'Manage the subscriptions of the system.',
      'lastrenewal' => 'Last renewal',
      'nextrenewal' => 'Next scheduled renewal',
      'month' => 'Forecast information for the month of %month% calculated on %date%',
      'income' => 'Income from subscriptions',
    ],
    'quotes' => [
      'title' => 'Quotes',
      'subtitle' => 'Manage the quotes of the system.',
      'note_admin' => 'Note for admin',
      'note' => 'Note for customer',
      'info' => 'Quote info',
      'details' => 'Quote details',
      'sendmail' => 'Send mail',
      'description' => 'Description',
      'maketransaction' => 'Make transaction',
      'refuse' => 'Refuse quote',
      'accept' => 'Accept quote',
      'seetransaction' => 'See transaction',
      'addrow' => 'Add row',
      'finish' => 'End quote',
    ],
    'orders' => [
      'title' => 'Orders',
      'subtitle' => 'Manage the orders of the system.',
      'confirmed' => 'Confirmed',
      'validateorder' => 'Validate orders',
      'data' => 'Manager the data order %id%',
      'webhook' => [
        'variables' => 'Available variable',
        'url' => 'Webhook url',
        'title' => 'Run webhook on order',
      ],
    ],
    'domains' => [
      'title' => 'Domains',
      'subtitle' => 'Manage the domains of the system.',
      'domain' => 'Domain',
      'type' => 'Type',
    ],
    'upgrades' => [
      'title' => 'Upgrades',
      'subtitle' => 'Manage system service upgrades.',
      'make' => 'Upgrade a service',
      'clientmustpay' => 'Customer must pay invoice ?',
      'cannot' => 'The current product cannot be upgraded. Please contact support',
      'prorata' => 'Prorata',
      'newproduct' => 'New product',
      'oldproduct' => 'Old product',
    ],
    'options' => [
      'title' => 'Options',
      'subtitle' => 'Manage the options of the store.',
    ],
    'subdomains' => [
      'title' => 'Sub-domains',
      'subtitle' => 'Manage the subdomains of the system.',
      'domain' => 'Domain',
      'type' => 'Type',
    ],
    'coupon' => [
      'title' => 'Coupons',
      'subtitle' => 'Manage the Coupons of the store.',
      'amount' => 'Minimum basket amount to access this coupon',
      'maxuses' => 'Number of authorized uses (0 = No limit)',
      'onceperclient' => 'Allow only one use per customer',
      'need' => 'Restrict coupon code to specific products already owned by the customer',
      'usage' => 'Number of usage',
    ],
    'group' => [
      'meta_description' => 'Meta description',
      'title' => 'Groups',
      'subtitle' => 'Manage the groups of the store.',
      'headline' => 'Head Line',
      'parent' => 'Parent',
      'col' => 'Number of group per row in store',
      'colproduct' => 'Number of products per row in the group page',
      'name' => 'Group name',
      'add' => 'Add a product in this group',
      'seeinclientarea' => 'See in clientarea',
      'delete' => 'Delete group',
      'products' => 'Products associated with the group',
      'ribbon_color' => 'Color of ribbon (Optional)',
      'ribbon' => 'Text of ribbon (Optional)',
      'upgradable' => 'Products in this group are upgradeable',
      'downgradable' => 'Products in this group are downgradable',
      'pageheadline' => 'Description in group page',
    ],
    'discount' => [
      'title' => 'Discounts',
      'subtitle' => 'Manage the discounts of the store.',
      'global' => 'Should the discount be active on the entire store?',
      'start_at' => 'Start',
      'end_at' => 'End',
      'months' => 'No. months of discounts',
      'month' => 'No. of months',
      'required' => 'Product is required',
      'requiredsub' => 'One of the products must be in the basket for the discount to be applied.',
    ],
    'services' => [
      'title' => 'Services',
      'subtitle2' => 'Services that must be delivered are displayed here.',
      'subtitle' => 'Manage the services of the system.',
      'manual' => 'Manually add the service',
      'auto' => 'Deliver a service automatically',
      'manage' => 'Manage the service from your administration area',
      'manage2' => 'Manage the service from your client area',
      'discount' => [
        'months' => 'N° of months',
        'price' => 'Price reduction',
        'details' => 'This service will be billed at %price% for the first %months% of cycles.',
      ],
    ],
    'board' => [
      'title' => 'Earn table',
      'subtitle' => 'Here is the current Earn statement.',
      'conversionRate' => 'Conversion Rate',
      'frombeginning' => 'From the beginning',
      'others' => 'Unfinished orders',
      'completed' => 'Finished orders',
      'overview' => 'Overview',
      'clear' => [
        'development' => 'This button is only available in development environment',
        'button' => 'Clear board',
        'text' => 'By clearing the table, the services, transactions and everything related to invoicing will be deleted.',
      ],
      'counts' => [
        'today' => 'Today',
        'monthly' => 'This monthly',
        'yearly' => 'This yearly',
        'alltime' => 'All time',
        'since' => 'Since last month',
        'last' => 'Last year',
      ],
    ],
    'banner' => [
      'title' => 'Add an information banner to your client area',
      'content' => 'Content',
      'background' => 'Background',
    ],
    'transaction' => [
      'title' => 'Transactions',
      'subtitle' => 'Manage the transactions of the store.',
      'info' => 'Transaction Information',
      'subtitlecreate' => 'Add a transaction already paid on the system.',
      'linktopay' => 'Link to pay.',
      'sendbyemail' => 'Send by email',
      'createtransaction' => 'To create a transaction for a customer go <a href=\'%link%\'>here</a>',
    ],
    'transactiontemplate' => [
      'title' => 'Transactions',
      'subtitle' => 'Manage the transactions via made %type% of the store.',
    ],
    'product' => [
      'config' => 'Product configuration',
      'title' => 'Products',
      'group' => 'Group',
      'showdomainoptions' => 'Show domain option',
      'stockcontrol' => 'Stock control',
      'subtitle' => 'Manage the products of the store',
      'allowqty' => 'Allow multiple services per customer',
      'stock' => 'Stocks',
      'order' => 'Order',
      'ondemand' => 'On request',
      'ondemandhelp' => 'When your customer wants to buy this product, he will be redirected to the creation of ticket',
      'name' => 'Product name',
      'crosssellproducts' => 'Cross sell products',
      'autocreate' => 'Automatic create service',
      'outstock' => 'Make out stock',
      'welcomeemail' => '--',
      'link' => 'Link for add product',
      'recurringcycles' => 'Limit the number of renewals for a subscription (0 = Unlimited)',
      'autoterminatedays' => 'Number of days before termination of the offer',
      'autoterminateemail' => '--',
      'autoterminate' => 'Fixed-term activation (eg free trials, limited-time products)',
      'recurringcyclestitle' => 'Limit (0 = Unlimited)',
      'paymenttypes' => [
        'title' => 'Payment type',
      ],
      'taxes' => [
        'title' => 'Table of commissions',
        'subtitle' => 'You will find the prices of your products with the commisions of the payment gateway',
        'paypalfees' => 'After paypal commissions',
        'stripefees' => 'After stripe commissions',
        'info' => 'The commissions are forecasts, they can be different during a payment.',
        'flash' => [
          'title' => 'New',
          'content' => 'We have added a table of payment gateway commissions on your products.<a href=\'%link%\'>Click here</a>',
        ],
      ],
    ],
  ],
];