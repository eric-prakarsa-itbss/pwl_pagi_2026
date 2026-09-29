Membuat Model, Controller dan Migrasi untuk Tabel
- Product (barcode_number(string), product_name(string), buy_price(integer), sell_price(integer), supplier_id(integer))
- supplier (supplier_name(string), phone(string), email(string))
- transaction (invoice_number(string), supplier_id(integer), transaction_type(string), subtotal(integer))
- transaction_detail (transaction_id(integer), product_id(integer), quantity(integer), price(integer))