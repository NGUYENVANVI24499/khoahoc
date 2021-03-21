<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lịch Công tác tuần ') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    



                <div class="table-agile-info">
 <div class="panel panel-default">
    
    <div>
      <table  class="table table-bordered" >
        <thead>
          <tr>
            
            <th>Thời gian</th>
            <th>Nội Dung</th>
            <th data-breakpoints="xs">Thành phần</th>
           
            <th data-breakpoints="xs sm md" data-title="DOB">địa điểm</th>
          </tr>
        </thead>
        <tbody>
           
         
          
         


         <?php $is = 'Thứ 1'?>
    @forelse($workschedules as $workschedule)

    <?php $ab =sw_get_current_weekday(Carbon\Carbon::parse($workschedule->date_begin)->format('l'));?>
    
    <td  colspan="4" style="color: #000000; height: 55px;"
        <?php 
            if($is != $ab)
              $is = $ab;
             else echo "hidden=" ;
        ?>
    >

{{sw_get_current_weekday(Carbon\Carbon::parse($workschedule->date_begin)->format('l')) }}, ngày {{Carbon\Carbon::parse($workschedule->date_begin)->format('d - m - Y') }}
        </td>
    <tr>
        
        <td  style="color: #000080;width: 100px;
  line-height: 100px;
  white-space: nowrap; text-align: center;">{{$workschedule->time}} {{$workschedule->note}}</td>
        <td style="color: #000080;width:550px">{{$workschedule->content}}</td>
        <td style="color: #000080;width:50px">
        @forelse( $workschedule->lecturers as $lecturers)
        
            <ul style="list-style-type:none;">
              <li>{{$lecturers->name_gv}}</li>
              
            </ul>
        @empty
          <p> dữ liệu rỗng</p>
        
        @endforelse
        </td>
        <td style="color: #000080;">{{$workschedule->place}}</td>
    </tr>
    @empty
          <p> dữ liệu rỗng</p>
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
</x-app-layout>
<?php

function Yesterday($weekday){
    return 0;
}

function sw_get_current_weekday($weekday) {

    $weekday = strtolower($weekday);
    switch($weekday) {
        case 'monday':
            $weekday = 'Thứ 2';
            break;
        case 'tuesday':
            $weekday = 'Thứ 3';
            break;
        case 'wednesday':
            $weekday = 'Thứ 4';
            break;
        case 'thursday':
            $weekday = 'Thứ 5';
            break;
        case 'friday':
            $weekday = 'Thứ 6';
            break;
        case 'saturday':
            $weekday = 'Thứ 7';
            break;
        default:
            $weekday = 'Chủ nhật';
            break;
    }
    return $weekday;
}
?>