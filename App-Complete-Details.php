<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from wpocean.com/html/tf/canun-live/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jun 2022 09:17:07 GMT -->
<head>
    <title> Canun – Index</title>
    
    <?php
    session_start();
        include "Links.php";
    ?>
</head>

<body>

    <?php
        $page = 'Home';
        include "Header.php";
    ?>

    <!-- start of breadcumb-section -->
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Cart</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>Cart</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->
    <!-- cart-area start -->
    <div class="cart-area section-padding">
        <div class="container">
            <div class="form">
                <div class="cart-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <form action="https://wpocean.com/html/tf/canun-live/cart">
                                <table class="table-responsive cart-wrap">
                                    <thead>
                                        <tr>
                                            <th class="images images-b">Image</th>
                                            <th class="product-2">Product Name</th>
                                            <th class="pr">Quantity</th>
                                            <th class="ptice">Price</th>
                                            <th class="stock">Total Price</th>
                                            <th class="remove remove-b">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="images"><img src="assets/images/cart/img-1.jpg" alt=""></td>
                                            <td class="product">
                                                <ul>
                                                    <li class="first-cart"> Learning the Law</li>
                                                    <li>Brand : Cuppa</li>
                                                    <li>Size : XL</li>
                                                </ul>
                                            </td>
                                            <td class="stock">
                                                <ul class="input-style">
                                                    <li class="quantity cart-plus-minus">
                                                        <input type="text" value="1" />
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="ptice">$ 250</td>
                                            <td class="stock">$ 250</td>
                                            <td class="action">
                                                <ul>
                                                    <li class="w-btn"><a data-bs-toggle="tooltip"
                                                            data-bs-html="true" title="Remove from Cart" href="#"><i
                                                                class="fi ti-trash"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="images"><img src="assets/images/cart/img-2.jpg" alt=""></td>
                                            <td class="product">
                                                <ul>
                                                    <li class="first-cart">To Kill a Mockingbird</li>
                                                    <li>Brand : Cuppa</li>
                                                    <li>Size : XXL</li>
                                                </ul>
                                            </td>
                                            <td class="stock">
                                                <ul class="input-style">
                                                    <li class="quantity cart-plus-minus">
                                                        <input type="text" value="1" />
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="ptice">$ 350</td>
                                            <td class="stock">$ 350</td>
                                            <td class="action">
                                                <ul>
                                                    <li class="w-btn"><a data-bs-toggle="tooltip"
                                                            data-bs-html="true" title="Remove to Cart" href="#"><i
                                                                class="fi ti-trash"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="images"><img src="assets/images/cart/img-3.jpg" alt=""></td>
                                            <td class="product">
                                                <ul>
                                                    <li class="first-cart">Black  Learning the Law</li>
                                                    <li>Brand : Cuppa</li>
                                                    <li>Size : XXL</li>
                                                </ul>
                                            </td>
                                            <td class="stock">
                                                <ul class="input-style">
                                                    <li class="quantity cart-plus-minus">
                                                        <input type="text" value="1" />
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="ptice">$ 450</td>
                                            <td class="stock">$ 450</td>
                                            <td class="action">
                                                <ul>
                                                    <li class="w-btn"><a data-bs-toggle="tooltip"
                                                            data-bs-html="true" title="Remove to Cart" href="#"><i
                                                                class="fi ti-trash"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="images"><img src="assets/images/cart/img-4.jpg" alt=""></td>
                                            <td class="product">
                                                <ul>
                                                    <li class="first-cart">Red  Learning the Law</li>
                                                    <li>Brand : Cuppa</li>
                                                    <li>Size : L</li>
                                                </ul>
                                            </td>
                                            <td class="stock">
                                                <ul class="input-style">
                                                    <li class="quantity cart-plus-minus">
                                                        <input type="text" value="1" />
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="ptice">$ 550</td>
                                            <td class="stock">$ 550</td>
                                            <td class="action">
                                                <ul>
                                                    <li class="w-btn"><a data-bs-toggle="tooltip"
                                                            data-bs-html="true" title="Remove to Cart" href="#"><i
                                                                class="fi ti-trash"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="images"><img src="assets/images/cart/img-5.jpg" alt=""></td>
                                            <td class="product">
                                                <ul>
                                                    <li class="first-cart">The Legal Analyst</li>
                                                    <li>Brand : Cuppa</li>
                                                    <li>Size : M</li>
                                                </ul>
                                            </td>
                                            <td class="stock">
                                                <ul class="input-style">
                                                    <li class="quantity cart-plus-minus">
                                                        <input type="text" value="1" />
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="ptice">$ 550</td>
                                            <td class="stock">$ 550</td>
                                            <td class="action">
                                                <ul>
                                                    <li class="w-btn"><a data-bs-toggle="tooltip"
                                                            data-bs-html="true" title="Remove to Cart" href="#"><i
                                                                class="fi ti-trash"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                            <div class="submit-btn-area">
                                <ul>
                                    <li><a class="theme-btn" href="shop.html">Continue Shopping <i
                                                class="fa fa-angle-double-right"></i></a></li>
                                    <li><button type="submit">Update Cart</button></li>
                                </ul>
                            </div>
                            <div class="cart-product-list">
                                <ul>
                                    <li>Total product<span>( 05 )</span></li>
                                    <li>Sub Price<span>$2250</span></li>
                                    <li>Vat<span>$50</span></li>
                                    <li>Eco Tax<span>$100</span></li>
                                    <li>Delivery Charge<span>$100</span></li>
                                    <li class="cart-b">Total Price<span>$2500</span></li>
                                </ul>
                            </div>

                            <div class="submit-btn-area">
                                <ul>
                                    <li><a class="theme-btn" href="checkout.html">Proceed to Checkout <i
                                                class="fa fa-angle-double-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-area end -->

    <?php
        include "Footer.php";
    ?>

    <?php
        include "Scripts.php";
    ?>

</body>

<!-- Mirrored from wpocean.com/html/tf/canun-live/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jun 2022 09:17:07 GMT -->
</html>