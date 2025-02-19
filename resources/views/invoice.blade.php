<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="{{ public_path('assets/invoice.css') }}" type="text/css"> 
</head>

<body>
<table class="table-no-border">

    <tr>
        <td class="width-70">
            <img src="" alt="No image" width="200" />
        </td>

        <td class="width-30">
            <h2>Invoice ID: 123456789</h2>
        </td>
    </tr>
</table>

<div class="margin-top">
    <table class="table-no-border">
        <tr>
            <td class="width-50">
                <div><strong>To:</strong></div>
                <div>Test</div>

                <div>1401 NW 17th Ave, Florida - 33125</div>
                <div><strong>Phone:</strong> (305) 981-1561</div>
                <div><strong>Email:</strong> test@gmail.com</div>
            </td>

            <td class="width-50">
                <div><strong>From:</strong></div>
                <div>Ruhul Amin</div>
                <div>Khilkhet, Dhaka</div>
                <div><strong>Phone:</strong> 0123456789</div>
                <div><strong>Email:</strong> ruhul@gmail.com</div>
            </td>
        </tr>
    </table>
</div>

<div>
    <table class="product-table">
        <thead>
            <tr>
                <th class="width-25">
                    <strong>Qty</strong>
                </th>

                <th class="width-50">
                    <strong>Product</strong>
                </th>

                <th class="width-25">
                    <strong>Price</strong>
                </th>
            </tr>
        </thead>

        <tbody>
            @foreach($data as $value)
            <tr>
                <td class="width-25">
                    {{ $value['quantity'] }}
                </td>

                <td class="width-50">
                    {{ $value['description'] }}
                </td>

                <td class="width-25">
                    {{ $value['price'] }}
                </td>
            </tr>
            @endforeach
        </tbody>

        <tfoot>
            <tr>
                <td class="width-70" colspan="2">
                    <strong>Sub Total:</strong>
                </td>

                <td class="width-25">
                    <strong>$1000.00</strong>
                </td>
            </tr>

            <tr>
                <td class="width-70" colspan="2">
                    <strong>Tax</strong>(10%):
                </td>

                <td class="width-25">
                    <strong>$100.00</strong>
                </td>
            </tr>

            <tr>
                <td class="width-70" colspan="2">
                    <strong>Total Amount:</strong>
                </td>

                <td class="width-25">
                    <strong>$1100.00</strong>
                </td>
            </tr>
        </tfoot>
    </table>
</div>

<div class="footer-div">
    <p>Thank you</p>
</div>

</body>
</html>