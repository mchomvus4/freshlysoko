@extends('frontend.main_master')
@section('content')


    <div class="body-content">
        <div class="container">
            <div class="row">
              @include('frontend.common.user_sidebar')
             <div class="col-md-2">

             </div>
             <div class="col-md-8">
              <div class="table-responsive">
               <table class="table">
                <tbody>
                 <tr style="background: #e2e2e2;">
                   <td class="col-md-1">
                    <label for="">Date</label>
                   </td>
                   <td class="col-md-3">
                    <label for="">Total Amount</label>
                   </td>
                   <td class="col-md-3">
                    <label for="">Payment</label>
                   </td>
                   <td class="col-md-2">
                    <label for="">Invoice</label>
                   </td>
                    <td class="col-md-1">
                    <label for="">Reason</label>
                   </td>
                   <td class="col-md-2">
                    <label for="">Order Status</label>
                   </td>
                  
                 </tr>



                 @foreach ($orders as $order )
                  
                
                  <tr>
                   <td class="col-md-1">
                    <label for="">{{$order->order_date}}</label>
                   </td>
                   <td class="col-md-3">
                    <label for="">{{$order->amount}}Tsh</label>
                   </td>
                   <td class="col-md-3">
                    <label for="">{{$order->payment_method}}</label>
                   </td>
                   <td class="col-md-2">
                    <label for="">{{$order->invoice_no}}</label>
                   </td>
                   <td class="col-md-2">
                    <label for="">{{$order->return_reason}}</label>
                   </td>
                   <td class="col-md-2">
                    <label for="">


                      @if ($order->return_order == 0)

                     <span class="badge badge-pill badge-warning" style="background:#418DB9;">No Return Requested</span>
                       @elseif ($order->return_order == 1)
                     <span class="badge badge-pill badge-warning" style="background:#800000;">Pending</span>

                     <span class="badge badge-pill badge-warning" style="background:red;">Return Requested</span>

                      @elseif ($order->return_order == 2)
                     <span class="badge badge-pill badge-warning" style="background:#008000;">Success</span>
                     @endif
                     </label>
                   </td>
                   {{-- <td class="col-md-1">
                    <a href="{{url('/user/order_details/'.$order->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i>View</a>
                    <a target="_blank" href="{{url('/user/invoice_download/'.$order->id)}}" class="btn btn-danger" style="margin-top: 5px;"><i class="fa fa-download" style="color: white;"></i>Invoice</a>
                   </td> --}}
                 </tr>
                  @endforeach
                </tbody>

               </table>
              </div>
             </div>



            </div><!-- End Row-->

        </div>

    </div>


@endsection