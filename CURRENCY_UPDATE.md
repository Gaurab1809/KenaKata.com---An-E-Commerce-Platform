# Currency Configuration

## Overview

The KenaKata E-commerce project has been updated to use **Taka** as the default currency instead of US Dollars (\$).

## Changes Made

### 1. Frontend Views

-   ✅ Product listings (index, grids, lists, detail pages)
-   ✅ Shopping cart and checkout pages
-   ✅ Header cart/wishlist displays
-   ✅ All price displays now show "Taka" instead of "\$"

### 2. Backend Views

-   ✅ Admin dashboard charts and analytics
-   ✅ Order management pages
-   ✅ Shipping management
-   ✅ PDF order reports

### 3. JavaScript Files

-   ✅ Price range sliders
-   ✅ Dynamic price calculations
-   ✅ Cart total updates

### 4. Helper Functions

-   ✅ Added `base_currency()` function
-   ✅ Added `formatCurrency()` function for consistent formatting
-   ✅ Added `orderPrice()` function for order calculations

### 5. Configuration

-   ✅ Created `config/currency.php` for centralized currency settings
-   ✅ Configurable currency symbol, position, and formatting options

## Configuration Options

The currency can be configured in `config/currency.php`:

```php
'default_currency' => 'BDT',
'currency_symbol' => 'Taka',
'currency_position' => 'after', // 'before' or 'after'
'decimal_places' => 2,
'thousands_separator' => ',',
'decimal_separator' => '.',
```

## Environment Variables

You can override currency settings using environment variables:

```env
CURRENCY_DEFAULT=BDT
CURRENCY_SYMBOL=Taka
CURRENCY_POSITION=after
CURRENCY_DECIMAL_PLACES=2
CURRENCY_THOUSANDS_SEPARATOR=,
CURRENCY_DECIMAL_SEPARATOR=.
```

## Usage Examples

### In Blade Templates

```php
{{ Helper::formatCurrency($product->price) }}
// Output: 1,500.00 Taka

{{ Helper::base_currency() }}
// Output: Taka
```

### In Controllers

```php
$formattedPrice = Helper::formatCurrency($totalAmount);
```

## Database Impact

-   No database schema changes required
-   All existing price data remains unchanged
-   Only display formatting has been updated

## Testing

-   All price displays should now show "Taka" instead of "\$"
-   Cart calculations should work correctly
-   Order totals should display properly
-   PDF reports should show correct currency

## Future Enhancements

-   Multi-currency support can be easily added
-   Currency conversion rates can be integrated
-   Localization for different regions

