<div>
    <form method="post" action="{{ action([App\Http\Controllers\ProductController::class, 'update']) }}">
        <table class="table table-striped">
            <tr>
                <td colspan=2 align="center"><h1><font color="white">
                    Create Produk
                </font></h1></td>
            </tr>
            <tr>
                <td><font color="white">Barcode</font></td>
                <td><input type="text" name="barcode_number" size="55" value="{{ $product->barcode_number }}"></td>
            </tr>
            <tr>
                <td><font color="white">Nama Produk</font></td>
                <td><input type="text" name="product_name" size="55" value=""></td>
            </tr>
            <tr>
                <td><font color="white">Harga Beli</font></td>
                <td><input type="number" name="buy_price" size="55" value="0"></td>
            </tr>
            <tr>
                <td><font color="white">Harga Jual</font></td>
                <td><input type="number" name="sell_price" size="55" value="0"></td>
            </tr>
            <tr>
                <td><font color="white">Supplier</font></td>
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
