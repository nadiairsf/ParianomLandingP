<table class="table table-striped dataTable-table">
   <thead>
      <h1>Rekapitulasi Pesanan Parianom Pada {{date("d-m-y")}}</h1>
         <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Penjual</th>
            <th>Nama Toko</th>
            <th>Kode Pesanan</th>
            <th>Jumlah</th>
            <th>Total</th>
         </tr>
      </thead>
      @php $no = 1; @endphp
      @foreach($data as $p)
      <tbody>
         <tr>
            <td>{{$no++}}</td>
            <td>
            <?php
               $date = new DateTime($p->timestamp);
               echo $date->format('d-m-Y'); 
            ?>
            </td>
            <td>{{$p->nama_lengkap}}</td>
            <td>{{$p->nama_toko}}</td>
            <td>{{$p->kode_pesanan}}</td>
            <td>{{$p->jumlah}}</td>
            <td>@currency($p->total)</td>
         </tr>
      @endforeach
      </tbody>
</table>