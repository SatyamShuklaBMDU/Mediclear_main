@include('include.sidebar')

@if(session()->has('message'))
    <script> alert('{{ session()->get('message') }}');

    </script>

{{session()->forget('message') }}
@endif

 <div class="content-wrapper" style="background-color:#e5e5e5;">
<div class="container-fluid">
        <div class="row">
           <div class="col-md-8 mx-auto mt-5" id="form">
               <div class="shadow p-3 rounded">
                                 <h4 class="mt-2 ">Add Banner</h4>
                                 <form method="POST" action="{{url('/banner/update')}}" enctype="multipart/form-data">
  @csrf

  <div class="form-group">
    {{-- <label for="exampleFormControlFile1">Choose For</label> --}}
    <select name="for" id="" class="form-control" required>
      <option value="" selected disabled>Choose For</option>
      <option value="vertigo">Vertigo banner</option>
      {{-- <option value="home">Home banner</option>
      <option value="ranking">Ranking banner</option> --}}
    </select>
    {{-- <input type="file"  class="form-control-file" name="for" accept="" id="exampleFormControlFile1"> --}}
  </div>



                                    <div class="form-group">
    <label for="exampleFormControlFile1">Choose Banner</label>
    <input type="file"  class="form-control-file" name="banner" accept="image/*" id="exampleFormControlFile1" required>
  </div>

  <div class="buttton mt-3 ">
                                    <button type="submit" class="btn   bg-gradient-success text-white shadow-lg ">Submit</button>
                                 </div>
                              </div>
                            </form>




                            <div class="row mt-3 px-4">
                                <div class="col">
                                <table class="table responsive-table  table-striped">
                                        <thead style="
                                        background-color: white;
                                    ">
                                          <tr class="">
                                            {{-- <th scope="col"><input type="checkbox" name="" id=""></th> --}}
                                            <th scope="col">Sr.No.</th>
                                            <th scope="col">For</th>
                                            <th scope="col ">Banner</th>
                                            <th scope="col">Action</th>

                                          </tr>
                                        </thead>
                                        <tbody>
{{-- {{-- --}}
@php
    $i=1;
@endphp
                                           @foreach ( $banners as $banner )


                                          <tr>
                                            {{-- <th scope="row"><input type="checkbox" name="" id=""></th> --}}
                                            <td><b>{{$i}}</b></td>
                                            <td><b>{{$banner->for}}</b></td>
                                            <td><img src="{{ asset('/public/images/'.$banner->banner) }}" style="
                                                width: 400px;
                                            "></td>

                                             <td>
                                             <a  onclick="{
                                if(confirm('Are you sure to delete this banner?')) {
                                location.href='{{asset('/banners/delete/'.$banner->id)}}';              
                                             }
                                             }" class="btn "  style="
                                                background-color: crimson;
                                                color: wheat;
                                            ">Delete</a>
                                            </td>

                                          </tr>

                                          @php
                                            $i++;
                                            @endphp

                                          @endforeach



                                        </tbody>
                                      </table>
                                </div>
                              </div>


                            </div>

                        </div>
                         <!-- 4-blocks row end -->






</div>
</div>
</div>
</div>

<!-- footer-file-start -->

@include('include.footer')
<!-- footer-file-start -->
