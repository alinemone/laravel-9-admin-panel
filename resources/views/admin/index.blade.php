@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="toolbar-ui">
            <h1 class="text-dark fs-5 fw-bold">تیکت ها</h1>
            <ul class="breadcrumb-ui ps-0">
                <li><a href="index.html" title="پیشخوان">داشبورد</a></li>
                <li><a href="index.html" class="text-dark" title="پیشخوان">تیکت ها</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover table-custom spacing5">
                        <thead>
                        <tr class="title-row">
                            <th>شناسه</th>
                            <th>نام ارسال کننده</th>
                            <th>ایمیل ارسال کننده</th>
                            <th>آخرین بروزرسانی</th>
                            <th>وضعیت</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="">1</a></td>
                            <td><a href="">محمد نیکو</a></td>
                            <td><a href="">mmd@gmail.com</a></td>
                            <td>1399/05/01</td>
                            <td><span class="badge badge-info">جدید</span></td>
                            <td>
                                <a href="show-ticket.html" type="button" class="btn btn-sm btn-default ac-btn-ui" data-bs-toggle="tooltip"
                                   data-bs-placement="top" title="مشاهده">
                                    <i class="ri-eye-fill"></i>
                                </a>

                                <button type="button" class="btn btn-sm btn-default ac-btn-ui" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="تایید"
                                        aria-describedby="tooltip66185"><i class="ri-check-line"></i></button>
                                <button type="button" class="btn btn-sm btn-default ac-btn-ui" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="رد"
                                        aria-describedby="tooltip286794"><i class="ri-close-line"></i></button>

                                <button type="button" class="btn btn-sm btn-default ac-btn-ui" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="ویرایش"
                                        aria-describedby="tooltip286794"><i class="ri-edit-2-line"></i></button>
                                <button type="button" class="btn btn-sm btn-default ac-btn-ui" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="حذف"
                                        aria-describedby="tooltip286794"><i class="ri-delete-bin-line"></i></button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
