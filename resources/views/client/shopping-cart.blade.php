@extends('client.layouts.master')

@section('title')
    Giỏ hàng
@endsection

@section('content')
@include('client.layouts.components.breadcrumb', ['pageName' => 'Giỏ hàng', 'pageTitle' => 'Giỏ hàng'])
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="/client/img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg" alt="" style="width: 90px;">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>T-shirt Contrast Pocket</h6>
                                        <h5>300.000 VNĐ</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">300.000 VNĐ</td>
                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="/client/img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg" alt="" style="width: 90px;">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>Diagonal Textured Cap</h6>
                                        <h5>300.000 VNĐ</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">300.000 VNĐ</td>
                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="/client/img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg" alt="" style="width: 90px;">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>Basic Flowing Scarf</h6>
                                        <h5>300.000 VNĐ</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">300.000 VNĐ</td>
                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr>
                            <tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img src="/client/img/chulam/455971439_1177735816796946_4225547553999920568_n.jpg" alt="" style="width: 90px;">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>Basic Flowing Scarf</h6>
                                        <h5>300.000 VNĐ</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">300.000 VNĐ</td>
                                <td class="cart__close"><i class="fa fa-close"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="continue__btn">
                            <a href="#">Tiếp tục mua hàng</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart__total">
                    <h6>Tổng giỏ hàng</h6>
                    <ul>
                        <li>Subtotal <span>1.600.000 VNĐ</span></li>
                        <li>Tổng tiền <span>1.600.000 VNĐ</span></li>
                    </ul>
                    <a href="#" class="primary-btn">Tiến hành thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection