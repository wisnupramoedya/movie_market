@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col -md-12">
            <a href="" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>
        </div>
        <div class="col -md-12">
            <h2>BLABLABLA</h2>
        </div>
        <div class="row">
            <div class="col -md-6">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Tahun</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Genre</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Rating</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Jumlah Film</td>
                            <td>:</td>
                            <td>
                                <form action="" method="post">
                                    <input type="text" name="jumlah_beli" class="form-control" required="">
                                    <button type="submit" class="btn btn-primary">Masukkan Keranjang</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection