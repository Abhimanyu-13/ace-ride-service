<div class="col-lg-2 col-5">
    <a class="navbar-brand mr-0" style="height:60px" href="{{route('userHome')}}">
       <img alt="" src="{{$urlImg}}">
    </a>
 </div>
 <div class="col-lg-7 main-menu d-block order-lg-1 order-2 ">
    <div class="d-md-flex mr-auto">
       {{-- @if( (Session::get('preferences'))) @if( (isset(Session::get('preferences')->is_hyperlocal)) && (Session::get('preferences')->is_hyperlocal==1) )
       <div class="location-bar d-none d-lg-flex align-items-center justify-content-start ml-md-2 my-2 my-lg-0 dropdown-toggle order-1" href="#edit-address" data-toggle="modal">
          <div class="map-icon mr-1">
          <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.848633 6.15122C0.848633 2.7594 3.60803 0 6.99985 0C10.3917 0 13.1511 2.7594 13.1511 6.15122C13.1511 8.18227 12.1614 9.98621 10.6392 11.107L7.46151 15.7563C7.3573 15.9088 7.18455 16 6.99985 16C6.81516 16 6.64237 15.9088 6.5382 15.7563L3.36047 11.107C1.8383 9.98621 0.848633 8.18227 0.848633 6.15122ZM6.99981 10.4225C7.23979 10.4225 7.47461 10.4072 7.70177 10.3806C9.73302 10.0446 11.2871 8.27613 11.287 6.15122C11.287 3.78725 9.36375 1.86402 6.99977 1.86402C4.6358 1.86402 2.71257 3.78725 2.71257 6.15122C2.71257 8.27613 4.26665 10.0446 6.29786 10.3806C6.52498 10.4072 6.75984 10.4225 6.99981 10.4225ZM9.23683 6.15089C9.23683 7.38626 8.23537 8.38772 7.00001 8.38772C5.76464 8.38772 4.76318 7.38626 4.76318 6.15089C4.76318 4.91552 5.76464 3.91406 7.00001 3.91406C8.23537 3.91406 9.23683 4.91552 9.23683 6.15089Z" fill="white"/></svg>
          </div>
          <div class="homepage-address text-left">
             <h2>
                <span data-placement="top" data-toggle="tooltip" title="{{session('selectedAddress')}}">{{session('selectedAddress')}}</span>
             </h2>
          </div>
          <div class="down-icon">
             <i class="fa fa-angle-down" aria-hidden="true"></i>
          </div>
       </div>
       @endif @endif --}}
       @if($mod_count > 1)
       <ul class="nav nav-tabs navigation-tab nav-material tab-icons mx-auto order-0 mb-2 mb-lg-0 vendor_mods" id="top-tab" role="tablist">
          @foreach(config('constants.VendorTypes') as $vendor_typ_key => $vendor_typ_value)
             @php
             $clientVendorTypes = $vendor_typ_key.'_check';
             $VendorTypesName = $vendor_typ_key == "dinein" ? 'dine_in' : $vendor_typ_key ;
             $NomenclatureName = getNomenclatureName($vendor_typ_value, true);
             @endphp

             @if($client_preference_detail->$clientVendorTypes == 1)
             <li class="navigation-tab-item" role="presentation"> <a
             class="nav-link {{($mod_count==1 || (Session::get('vendorType')==$VendorTypesName) || (Session::get('vendorType')=='')) ? 'active' : ''}}"
             id="{{$VendorTypesName}}_tab" VendorType="{{$VendorTypesName}}" data-toggle="tab" href="#{{$VendorTypesName}}_tab" role="tab"
             aria-controls="profile" aria-selected="false">{{$NomenclatureName}}</a> </li>
             @endif
          @endforeach

          {{-- @if($client_preference_detail->delivery_check==1) @php $Delivery=getNomenclatureName('Delivery', true); $Delivery=($Delivery==='Delivery') ? __('Delivery') : $Delivery; @endphp
          <li class="navigation-tab-item" role="presentation">
             <a class="nav-link {{($mod_count==1 || (Session::get('vendorType')=='delivery')) ? 'active' : ''}}" id="delivery_tab" data-toggle="tab" href="#delivery_tab" role="tab" aria-controls="profile" aria-selected="false">
                {{$Delivery}}</a>
          </li>
          @endif @if($client_preference_detail->dinein_check==1) @php $Dine_In=getNomenclatureName('Dine-In', true); $Dine_In=($Dine_In==='Dine-In') ? __('Dine-In') : $Dine_In; @endphp
          <li class="navigation-tab-item" role="presentation">
             <a class="nav-link {{($mod_count==1 || (Session::get('vendorType')=='dine_in')) ? 'active' : ''}}" id="dinein_tab" data-toggle="tab" href="#dinein_tab" role="tab" aria-controls="dinein_tab" aria-selected="false">{{$Dine_In}}</a>
          </li>
          @endif @if($client_preference_detail->takeaway_check==1)
          <li class="navigation-tab-item" role="presentation">
             @php $Takeaway=getNomenclatureName('Takeaway', true); $Takeaway=($Takeaway==='Takeaway') ? __('Takeaway') : $Takeaway; @endphp
             <a class="nav-link {{($mod_count==1 || (Session::get('vendorType')=='takeaway')) ? 'active' : ''}}" id="takeaway_tab" data-toggle="tab" href="#takeaway_tab" role="tab" aria-controls="takeaway_tab" aria-selected="false">{{$Takeaway}}</a>
          </li>
          @endif --}}
          <div class="navigation-tab-overlay"></div>
       </ul>
       @endif
    </div>
 </div>
