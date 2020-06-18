{{-- @include('inc.navbar') --}}

@extends('layouts.app1')

@section('content')
<div class="jumbotron" style="padding-top: 1%; margin:0">
  {{-- <p style="margin-top:0; text-align:center">New Patient Card:</p> --}}
  
  
    {!! Form::open(['action' => 'SkizbController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
    <div class="row ml-5 " style="text-align:center; margin-bottom:1%">
      <div class="col col-md-4">
        {{Form::label('name', 'Patient Name')}}
        {{Form::text('name', '', ['placeholder'=>'name...'])}}
      </div>
      <div class="col col-md-4">
        {{Form::label('phone', 'Phone')}}
        {{Form::text('phone', '', ['placeholder'=>'phone...'])}}
      </div>
      <div class="col col-md-2">
        {{Form::select('gender', ['male' => 'Male', 'female' => 'Female'], null, ['placeholder' => 'Gender'],['class'=>'form-control'])}} 
      </div>
    </div>
    <div class="row" >
      <div class="col col-md-1">
        <a href='/skizbs' class="btn btn-success"><i class="fa fa-chevron-left" aria-hidden="true"></i> BACK</a>
      </div>
      <div class="col col-md-5">
        <table  align="right"  class="radio_table" >
          <tr>
            <th>Crown</th>
            <th>Extr</th>
            <th>Fill</th>
            <th>Endo</th>
            <th>Inpl</th>
            <th>N/N</th>
          </tr>
          <tr>
            <td>{{Form::radio('t11', 'crown')}}</td>
            <td>{{Form::radio('t11', 'extr')}}</td>
            <td>{{Form::radio('t11', 'fill')}}</td>
            <td>{{Form::radio('t11', 'endo')}}</td>
            <td>{{Form::radio('t11', 'inpl')}}</td>
            <td>11</td>
          </tr>
          <tr>
            <td>{{Form::radio('t12', 'crown')}}</td>
            <td>{{Form::radio('t12', 'extr')}}</td>
            <td>{{Form::radio('t12', 'fill')}}</td>
            <td>{{Form::radio('t12', 'endo')}}</td>
            <td>{{Form::radio('t12', 'inpl')}}</td>
            <td>12</td>
          </tr>
          <tr>
            <td>{{Form::radio('t13', 'crown')}}</td>
            <td>{{Form::radio('t13', 'extr')}}</td>
            <td>{{Form::radio('t13', 'fill')}}</td>
            <td>{{Form::radio('t13', 'endo')}}</td>
            <td>{{Form::radio('t13', 'inpl')}}</td>
            <td>13</td>
          </tr>
          <tr>
            <td>{{Form::radio('t14', 'crown')}}</td>
            <td>{{Form::radio('t14', 'extr')}}</td>
            <td>{{Form::radio('t14', 'fill')}}</td>
            <td>{{Form::radio('t14', 'endo')}}</td>
            <td>{{Form::radio('t14', 'inpl')}}</td>
            <td>14</td>
          </tr>
          <tr>
            <td>{{Form::radio('t15', 'crown')}}</td>
            <td>{{Form::radio('t15', 'extr')}}</td>
            <td>{{Form::radio('t15', 'fill')}}</td>
            <td>{{Form::radio('t15', 'endo')}}</td>
            <td>{{Form::radio('t15', 'inpl')}}</td>
            <td>15</td>
          </tr>
          <tr>
            <td>{{Form::radio('t16', 'crown')}}</td>
            <td>{{Form::radio('t16', 'extr')}}</td>
            <td>{{Form::radio('t16', 'fill')}}</td>
            <td>{{Form::radio('t16', 'endo')}}</td>
            <td>{{Form::radio('t16', 'inpl')}}</td>
            <td>16</td>
          </tr>
          <tr>
            <td>{{Form::radio('t17', 'crown')}}</td>
            <td>{{Form::radio('t17', 'extr')}}</td>
            <td>{{Form::radio('t17', 'fill')}}</td>
            <td>{{Form::radio('t17', 'endo')}}</td>
            <td>{{Form::radio('t17', 'inpl')}}</td>
            <td>17</td>
          </tr>
          <tr>
            <td>{{Form::radio('t18', 'crown')}}</td>
            <td>{{Form::radio('t18', 'extr')}}</td>
            <td>{{Form::radio('t18', 'fill')}}</td>
            <td>{{Form::radio('t18', 'endo')}}</td>
            <td>{{Form::radio('t18', 'inpl')}}</td>
            <td>18</td>
          </tr>
          <tr>
            <td colspan="5" style="height:4px; background:gray"></td>
          </tr>
          <tr>
            <td>{{Form::radio('t41', 'crown')}}</td>
            <td>{{Form::radio('t41', 'extr')}}</td>
            <td>{{Form::radio('t41', 'fill')}}</td>
            <td>{{Form::radio('t41', 'endo')}}</td>
            <td>{{Form::radio('t41', 'inpl')}}</td>
            <td>41</td>
          </tr>
          <tr>
            <td>{{Form::radio('t42', 'crown')}}</td>
            <td>{{Form::radio('t42', 'extr')}}</td>
            <td>{{Form::radio('t42', 'fill')}}</td>
            <td>{{Form::radio('t42', 'endo')}}</td>
            <td>{{Form::radio('t42', 'inpl')}}</td>
            <td>42</td>
          </tr>
          <tr>
            <td>{{Form::radio('t43', 'crown')}}</td>
            <td>{{Form::radio('t43', 'extr')}}</td>
            <td>{{Form::radio('t43', 'fill')}}</td>
            <td>{{Form::radio('t43', 'endo')}}</td>
            <td>{{Form::radio('t43', 'inpl')}}</td>
            <td>43</td>
          </tr>
          <tr>
            <td>{{Form::radio('t44', 'crown')}}</td>
            <td>{{Form::radio('t44', 'extr')}}</td>
            <td>{{Form::radio('t44', 'fill')}}</td>
            <td>{{Form::radio('t44', 'endo')}}</td>
            <td>{{Form::radio('t44', 'inpl')}}</td>
            <td>44</td>
          </tr>
          <tr>
            <td>{{Form::radio('t45', 'crown')}}</td>
            <td>{{Form::radio('t45', 'extr')}}</td>
            <td>{{Form::radio('t45', 'fill')}}</td>
            <td>{{Form::radio('t45', 'endo')}}</td>
            <td>{{Form::radio('t45', 'inpl')}}</td>
            <td>45</td>
          </tr>
          <tr>
            <td>{{Form::radio('t46', 'crown')}}</td>
            <td>{{Form::radio('t46', 'extr')}}</td>
            <td>{{Form::radio('t46', 'fill')}}</td>
            <td>{{Form::radio('t46', 'endo')}}</td>
            <td>{{Form::radio('t46', 'inpl')}}</td>
            <td>46</td>
          </tr>
          <tr>
            <td>{{Form::radio('t47', 'crown')}}</td>
            <td>{{Form::radio('t47', 'extr')}}</td>
            <td>{{Form::radio('t47', 'fill')}}</td>
            <td>{{Form::radio('t47', 'endo')}}</td>
            <td>{{Form::radio('t47', 'inpl')}}</td>
            <td>47</td>
          </tr>
          <tr>
            <td>{{Form::radio('t48', 'crown')}}</td>
            <td>{{Form::radio('t48', 'extr')}}</td>
            <td>{{Form::radio('t48', 'fill')}}</td>
            <td>{{Form::radio('t48', 'endo')}}</td>
            <td>{{Form::radio('t48', 'inpl')}}</td>
            <td>48</td>
          </tr>
     
        </table>
        
      </div>
      <div class="col col-md-5" >
        <table border="1" align="left" class="radio_table" >
          <tr>
            <th>N/N</th>
            <th>Inpl</th>
            <th>Endo</th>
            <th>Fill</th>
            <th>Extr</th>
            <th>Crown</th>
          </tr>
          <tr>
            <td>21</td>
            <td>{{Form::radio('t21', 'inpl')}}</td>
            <td>{{Form::radio('t21', 'endo')}}</td>
            <td>{{Form::radio('t21', 'fill')}}</td>
            <td>{{Form::radio('t21', 'extr')}}</td>
            <td>{{Form::radio('t21', 'crown')}}</td>
           
          </tr>
          <tr>
            <td>22</td>
            <td>{{Form::radio('t22', 'inpl')}}</td>
            <td>{{Form::radio('t22', 'endo')}}</td>
            <td>{{Form::radio('t22', 'fill')}}</td>
            <td>{{Form::radio('t22', 'extr')}}</td>
            <td>{{Form::radio('t22', 'crown')}}</td>
          </tr>
          <tr>
            <td>23</td>
            <td>{{Form::radio('t23', 'inpl')}}</td>
            <td>{{Form::radio('t23', 'endo')}}</td>
            <td>{{Form::radio('t23', 'fill')}}</td>
            <td>{{Form::radio('t23', 'extr')}}</td>
            <td>{{Form::radio('t23', 'crown')}}</td>
          </tr>
          <tr>
            <td>24</td>
            <td>{{Form::radio('t24', 'inpl')}}</td>
            <td>{{Form::radio('t24', 'endo')}}</td>
            <td>{{Form::radio('t24', 'fill')}}</td>
            <td>{{Form::radio('t24', 'extr')}}</td>
            <td>{{Form::radio('t24', 'crown')}}</td>
          </tr>
          <tr>
            <td>25</td>
            <td>{{Form::radio('t25', 'inpl')}}</td>
            <td>{{Form::radio('t25', 'endo')}}</td>
            <td>{{Form::radio('t25', 'fill')}}</td>
            <td>{{Form::radio('t25', 'extr')}}</td>
            <td>{{Form::radio('t25', 'crown')}}</td>
          </tr>
          <tr>
            <td>26</td>
            <td>{{Form::radio('t26', 'inpl')}}</td>
            <td>{{Form::radio('t26', 'endo')}}</td>
            <td>{{Form::radio('t26', 'fill')}}</td>
            <td>{{Form::radio('t26', 'extr')}}</td>
            <td>{{Form::radio('t26', 'crown')}}</td>
          </tr>
          <tr>
            <td>27</td>
            <td>{{Form::radio('t27', 'inpl')}}</td>
            <td>{{Form::radio('t27', 'endo')}}</td>
            <td>{{Form::radio('t27', 'fill')}}</td>
            <td>{{Form::radio('t27', 'extr')}}</td>
            <td>{{Form::radio('t27', 'crown')}}</td>
         </tr>
         <tr>
          <td>28</td>
          <td>{{Form::radio('t28', 'inpl')}}</td>
          <td>{{Form::radio('t28', 'endo')}}</td>
          <td>{{Form::radio('t28', 'fill')}}</td>
          <td>{{Form::radio('t28', 'extr')}}</td>
          <td>{{Form::radio('t28', 'crown')}}</td>
        </tr>
          <tr>
            <td colspan="5" style="height:4px; background:gray"></td>
          </tr>
          <tr>
            <td>31</td>
            <td>{{Form::radio('t31', 'inpl')}}</td>
            <td>{{Form::radio('t31', 'endo')}}</td>
            <td>{{Form::radio('t31', 'fill')}}</td>
            <td>{{Form::radio('t31', 'extr')}}</td>
            <td>{{Form::radio('t31', 'crown')}}</td>
          </tr>
          <tr>
            <td>32</td>
            <td>{{Form::radio('t32', 'inpl')}}</td>
            <td>{{Form::radio('t32', 'endo')}}</td>
            <td>{{Form::radio('t32', 'fill')}}</td>
            <td>{{Form::radio('t32', 'extr')}}</td>
            <td>{{Form::radio('t32', 'crown')}}</td>
          </tr>
          <tr>
            <td>33</td>
            <td>{{Form::radio('t33', 'inpl')}}</td>
            <td>{{Form::radio('t33', 'endo')}}</td>
            <td>{{Form::radio('t33', 'fill')}}</td>
            <td>{{Form::radio('t33', 'extr')}}</td>
            <td>{{Form::radio('t33', 'crown')}}</td>
          </tr>
          <tr>
            <td>34</td>
            <td>{{Form::radio('t34', 'inpl')}}</td>
            <td>{{Form::radio('t34', 'endo')}}</td>
            <td>{{Form::radio('t34', 'fill')}}</td>
            <td>{{Form::radio('t34', 'extr')}}</td>
            <td>{{Form::radio('t34', 'crown')}}</td>
          </tr>
          <tr>
            <td>35</td>
            <td>{{Form::radio('t35', 'inpl')}}</td>
            <td>{{Form::radio('t35', 'endo')}}</td>
            <td>{{Form::radio('t35', 'fill')}}</td>
            <td>{{Form::radio('t35', 'extr')}}</td>
            <td>{{Form::radio('t35', 'crown')}}</td>
          </tr>
          <tr>
            <td>36</td>
            <td>{{Form::radio('t36', 'inpl')}}</td>
            <td>{{Form::radio('t36', 'endo')}}</td>
            <td>{{Form::radio('t36', 'fill')}}</td>
            <td>{{Form::radio('t36', 'extr')}}</td>
            <td>{{Form::radio('t36', 'crown')}}</td>
          </tr>
          <tr>
            <td>37</td>
            <td>{{Form::radio('t37', 'inpl')}}</td>
            <td>{{Form::radio('t37', 'endo')}}</td>
            <td>{{Form::radio('t37', 'fill')}}</td>
            <td>{{Form::radio('t37', 'extr')}}</td>
            <td>{{Form::radio('t37', 'crown')}}</td>
          </tr>
          <tr>
            <td>38</td>
            <td>{{Form::radio('t38', 'inpl')}}</td>
            <td>{{Form::radio('t38', 'endo')}}</td>
            <td>{{Form::radio('t38', 'fill')}}</td>
            <td>{{Form::radio('t38', 'extr')}}</td>
            <td>{{Form::radio('t38', 'crown')}}</td>
          </tr>

          
        </table>
        
      </div>
      <div class="col col-md-1">
        {{Form::hidden('userid', '')}}
        {{ FORM::button('<i class="fa fa-database" aria-hidden="true"></i> Save to DB',['class'=>'btn btn-success pull-right','type'=>'submit']) }}
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  
  
    

@endsection

       