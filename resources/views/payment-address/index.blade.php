@extends('layout.app-dashboard')

@section('title', ' Payment Address')
@section('content')

    </div>

    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Payment Address</h4>
                            <a href="{{ route('admin.payment-address.create') }}" class="btn btn-primary">Create New
                                Payment Address</a>
                        </div>
                        <div class="card-body">
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-0 table-responsive-sm">
                                        <thead>
                                            <tr>

                                                <th>Asset </th>
                                                <th>Payment address </th>
                                                <th>Default Address </th>
                                                <th>Created Date </th>
                                                <th colspan="">Action </th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse ($paymentAddresses as $paymentAddress)
                                                <tr>



                                                    <td> {{ $paymentAddress->asset->name }}</td>
                                                    <td> {{ $paymentAddress->address }}</td>
                                                    <td> {{ $paymentAddress->default == true ? 'True' : 'False' }}</td>
                                                    <td> {{ $paymentAddress->created_at }}</td>

                                                    <td>
                                                        <a href="{{ route('admin.payment-address.edit', $paymentAddress) }}"
                                                            class="btn btn-warning">Edit</a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.payment-address.show', $paymentAddress) }}"
                                                            class="btn btn-info">Show</a>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.payment-address.show', $paymentAddress) }}"
                                                            class="btn btn-danger">Delete</a>
                                                    </td>


                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="9" class="text-center">NO payment address created yet
                                                    </td>
                                                </tr>
                                            @endforelse




                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection