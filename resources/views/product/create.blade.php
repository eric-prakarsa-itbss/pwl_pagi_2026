<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
  </head>
  <body>
    <div>
        <form method="post" action="{{ action([App\Http\Controllers\ProductController::class, 'store']) }}">
            <table class="table table-striped">
                <tr>
                    <td colspan=2 align="center"><h1>
                        Create Produk
                    </h1></td>
                </tr>
                <tr>
                    <td>Barcode</td>
                    <td><input type="text" name="barcode_number" size="55" value=""></td>
                </tr>
                <tr>
                    <td>Nama Produk</td>
                    <td><input type="text" name="product_name" size="55" value=""></td>
                </tr>
                <tr>
                    <td>Harga Beli</td>
                    <td><input type="number" name="buy_price" size="55" value="0"></td>
                </tr>
                <tr>
                    <td>Harga Jual</td>
                    <td><input type="number" name="sell_price" size="55" value="0"></td>
                </tr>
                <tr>
                    <td>Supplier</td>
                    <td>
                        <select name="supplier_id">
                            <option value="">--- Pilih Supplier ---</option>
                            @foreach($supplier as $sup)
                                <option value="{{$sup->id}}">{{$sup->supplier_name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                            <input type="submit" value="Create">
                            <input type="reset" value="Batal">
                        </td>
                </tr>
            </table>
        </form>
    </div>
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
  </body>
</html>