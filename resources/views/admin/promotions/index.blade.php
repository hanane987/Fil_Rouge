
<x-app-layout>

<div class="container">
<style>

.demo{ font-family: 'Noto Sans', sans-serif; }
.panel{
    background: linear-gradient(to right, #2980b9, #2c3e50);
    padding: 0;
    border-radius: 10px;
    border: none;
    box-shadow: 0 0 0 5px rgba(0,0,0,0.05),0 0 0 10px rgba(0,0,0,0.05);
}
.panel .panel-heading{
    padding: 20px 15px;
    border-radius: 10px 10px 0 0;
    margin: 0;
}
.panel .panel-heading .title{
    color: #fff;
    font-size: 28px;
    font-weight: 500;
    text-transform: capitalize;
    line-height: 40px;
    margin: 0;
}
.panel .panel-heading .btn{
    color: rgba(255,255,255,0.5);
    background: transparent;
    font-size: 16px;
    text-transform: capitalize;
    border: 2px solid #fff;
    border-radius: 50px;
    transition: all 0.3s ease 0s;
}
.panel .panel-heading .btn:hover{
    color: #fff;
    text-shadow: 3px 3px rgba(255,255,255,0.2);
}
.panel .panel-heading .form-control{
    color: #fff;
    background-color: transparent;
    width: 35%;
    height: 40px;
    border: 2px solid #fff;
    border-radius: 20px;
    display: inline-block;
    transition: all 0.3s ease 0s;
}
.panel .panel-heading .form-control:focus{
    background-color: rgba(255,255,255,0.2);
    box-shadow: none;
    outline: none;
}
.panel .panel-heading .form-control::placeholder{
    color: rgba(255,255,255,0.5);
    font-size: 15px;
    font-weight: 500;
}
.panel .panel-body{ padding: 0; }
.panel .panel-body .table thead tr th{
    color: #fff;
    background-color: rgba(255, 255, 255, 0.2);
    font-size: 16px;
    font-weight: 500;
    text-transform: uppercase;
    padding: 12px;
    border: none;
}
.panel .panel-body .table tbody tr td{
    color: #fff;
    font-size: 15px;
    padding: 10px 12px;
    vertical-align: middle;
    border: none;
}
.panel .panel-body .table tbody tr:nth-child(even){ background-color: rgba(255,255,255,0.05); }
.panel .panel-body .table tbody .action-list{
    padding: 0;
    margin: 0;
    list-style: none;
}
.panel .panel-body .table tbody .action-list li{
    display: inline-block;
    margin: 0 5px;
}
.panel .panel-body .table tbody .action-list li a{
    color: #fff;
    font-size: 15px;
    position: relative;
    z-index: 1;
    transition: all 0.3s ease 0s;
}
.panel .panel-body .table tbody .action-list li a:hover{ text-shadow: 3px 3px 0 rgba(255,255,255,0.3); }
.panel .panel-body .table tbody .action-list li a:before,
.panel .panel-body .table tbody .action-list li a:after{
    content: attr(data-tip);
    color: #fff;
    background-color: #111;
    font-size: 12px;
    padding: 5px 7px;
    border-radius: 4px;
    text-transform: capitalize;
    display: none;
    transform: translateX(-50%);
    position: absolute;
    left: 50%;
    top: -32px;
    transition: all 0.3s ease 0s;
}
.panel .panel-body .table tbody .action-list li a:after{
    content: '';
    height: 15px;
    width: 15px;
    padding: 0;
    border-radius: 0;
    transform: translateX(-50%) rotate(45deg);
    top: -18px;
    z-index: -1;
}
.panel .panel-body .table tbody .action-list li a:hover:before,
.panel .panel-body .table tbody .action-list li a:hover:after{
    display: block;
}
.panel .panel-footer{
    color: #fff;
    background-color: transparent;
    padding: 15px;
    border: none;
}
.panel .panel-footer .col{ line-height: 35px; }
.pagination{ margin: 0; }
.pagination li a{
    color: #fff;
    background-color: transparent;
    border: 2px solid transparent;
    font-size: 18px;
    font-weight: 500;
    text-align: center;
    line-height: 31px;
    width: 35px;
    height: 35px;
    padding: 0;
    margin: 0 3px;
    border-radius: 50px;
    transition: all 0.3s ease 0s;
}
.pagination li a:hover{
    color: #fff;
    background-color: transparent;
    border-color: rgba(255,255,255,0.2);
}
.pagination li a:focus,
.pagination li.active a,
.pagination li.active a:hover{
    color: #fff;
    background-color: transparent;
    border-color: #fff;
}
.pagination li:first-child a,
.pagination li:last-child a{
    border-radius: 50%;
}
@media only screen and (max-width:767px){
    .panel .panel-heading .title{
        text-align: center;
        margin: 0 0 10px;
    }
    .panel .panel-heading .btn_group{ text-align: center; }
}



</style>

<div class="container">
    <div class="panel">
        <div class="panel-heading">
            <div class="row">
                <div class="col col-sm-6 col-xs-12">
                    <h4 class="title">All Promotions</h4>
                </div>
                <div class="col-sm-6 col-xs-12 text-right">
                    <a href="{{ route('promotions.create') }}" class="btn btn-primary mb-3">Create Promotion</a>
                </div>
            </div>
        </div>
        <div class="panel-body table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Discount</th>
                        <th>Validity Period Start</th>
                        <th>Validity Period End</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($promotions as $promotion)
                        <tr>
                            <td>{{ $promotion->id }}</td>
                            <td>{{ $promotion->name }}</td>
                            <td>{{ $promotion->discount }}</td>
                            <td>{{ $promotion->validityPeriodStart }}</td>
                            <td>{{ $promotion->validityPeriodEnd }}</td>
                            <td>
                                <a href="{{ route('promotions.edit', $promotion->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('promotions.destroy', $promotion->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this promotion?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Pagination and footer -->
    </div>
</div>
</x-app-layout>