 @extends('master')
@section('admin_content') 
<div class="form-w3layouts">
<div class="row">

            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm lịch công tác tuần {{$idd}}
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form role="form" action="{{URL::to('addlichcongtac')}}" method="post">
                                    @csrf

                                 <input type="" name="idtuan" value="{{$idd}}" hidden="" > 
                                 <div class="form-group">
                                    <label >loại công tác</label>
                                    <select class="form-control" name="loaicongtac">
                                        @foreach($loaicongtac as $type)
                                        <option value="{{$type->id_worktype}}">{{$type->name_workschedule}}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>

                                <div class="form-group">
                                    <label >Ngày công tác</label>
                                    <input type="date" id="date" name="date" class="form-control"   required>
                                </div>
                                <div class="form-group">
                                    <label >Ngày kết thúc công tác</label>
                                    <input type="date" name="date_end"  class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label >Thời gian</label>
                                    <input type="time" name="thoigian" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label >Nội dung công tác</label>
                                    <textarea  type="text" name="noidung" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label >địa điểm công tác</label>
                                    <input type="text" class="form-control" name="diadiem" required>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" id="exampleInputFile">
                                    <p class="help-block">Example block-level help text here.</p>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Check me out
                                    </label>
                                </div> -->
                                <div class="form-group">
                                    <label >ghi chú</label>
                                    <input type="text" class="form-control" name="ghichu" >
                                </div>
                                <button type="submit"  class="btn btn-info">Thêm </button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
            
</div>
</div>

<script>    CKEDITOR.replace( 'editor1' );</script>
@endsection