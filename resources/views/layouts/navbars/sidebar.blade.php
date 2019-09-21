<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
      {{ __('نظام ادارة المؤسسة') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('لوحة الادارة') }}</p>
        </a>
      </li>
        <!--Start Customize My system-->
        <li class="nav-item {{ ($activePage == 'clients' || $activePage == 'companies' || $activePage == 'vendors') ? ' active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#leads" aria-expanded="false">
                <i class="material-icons">people</i>
                <p>{{ __('السوق') }}
                    <b class="caret"></b>
                </p>
            </a>
            <div class="{{ ($activePage == 'clients' || $activePage == 'companies' || $activePage == 'vendors') ? ' collapse show' : 'collapse hide' }}" id="leads">
                <ul class="nav">
                    <li class="nav-item{{ $activePage == 'clients' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('index_clients') }}">
                            <span class="sidebar-normal">{{ __('العملاء') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'companies' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('companies') }}">
                            <span class="sidebar-normal"> {{ __('المؤسسات') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'vendors' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('vendors') }}">
                            <span class="sidebar-normal"> {{ __('الموردون') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ ($activePage == 'moneymakers' || $activePage == 'moneymakersprocesses') ? ' active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#moneymaking" aria-expanded="false">
                <i class="material-icons">attach_money</i>
                <p>{{ __('المرابحة') }}
                    <b class="caret"></b>
                </p>
            </a>
            <div class="{{ ($activePage == 'moneymakers' || $activePage == 'moneymakersprocesses') ? ' collapse show' : 'collapse hide' }}" id="moneymaking">
                <ul class="nav">
                    <li class="nav-item{{ $activePage == 'moneymakers' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('moneymakers') }}">
                            <span class="sidebar-normal">{{ __('المرابحون') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'moneymakersprocesses' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('moneymakersprocesses') }}">
                            <span class="sidebar-normal"> {{ __('عمليات المرابحة') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ ($activePage == 'producttypes' || $activePage == 'brands' || $activePage == 'products') ? ' active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#products" aria-expanded="false">
                <i class="material-icons">airplay</i>
                <p>{{ __('المنتجات') }}
                    <b class="caret"></b>
                </p>
            </a>
            <div class="{{ ($activePage == 'producttypes' || $activePage == 'brands' || $activePage == 'products') ? ' collapse show' : 'collapse hide' }}" id="products">
                <ul class="nav">
                    <li class="nav-item{{ $activePage == 'producttypes' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('producttypes') }}">
                            <span class="sidebar-normal">{{ __('أنواع المنتجات') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'brands' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('brands') }}">
                            <span class="sidebar-normal"> {{ __('براندات المنتجات') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'products' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('products') }}">
                            <span class="sidebar-normal"> {{ __('المنتجات') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item{{ $activePage == 'services' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('services') }}">
                <i class="material-icons">room_service</i>
                <p>{{ __('الخدمات') }}</p>
            </a>
        </li>
        <li class="nav-item{{ $activePage == 'offers' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('offers') }}">
                <i class="material-icons">local_offer</i>
                <p>{{ __('العروض') }}</p>
            </a>
        </li>
        <li class="nav-item {{ ($activePage == 'salesorders' || $activePage == 'salesinvoices') ? ' active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#sales" aria-expanded="false">
                <i class="material-icons">cloud_download</i>
                <p>{{ __('عمليات البيع') }}
                    <b class="caret"></b>
                </p>
            </a>
            <div class="{{ ($activePage == 'salesorders' || $activePage == 'salesinvoices') ? ' collapse show' : 'collapse hide' }}" id="sales">
                <ul class="nav">
                    <li class="nav-item{{ $activePage == 'salesorders' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('salesorders') }}">
                            <span class="sidebar-normal">{{ __('طلبات البيع') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'salesinvoices' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('salesinvoices') }}">
                            <span class="sidebar-normal"> {{ __('فواتير البيع') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ ($activePage == 'purchaseorders' || $activePage == 'purchaseinvoices') ? ' active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#purchase" aria-expanded="false">
                <i class="material-icons">cloud_upload</i>
                <p>{{ __('عمليات الشراء') }}
                    <b class="caret"></b>
                </p>
            </a>
            <div class="{{ ($activePage == 'purchaseorders' || $activePage == 'purchaseinvoices') ? ' collapse show' : 'collapse hide' }}" id="purchase">
                <ul class="nav">
                    <li class="nav-item{{ $activePage == 'purchaseorders' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('purchaseorders') }}">
                            <span class="sidebar-normal">{{ __('طلبات الشراء') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'purchaseinvoices' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('purchaseinvoices') }}">
                            <span class="sidebar-normal"> {{ __('فواتير الشراء') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item{{ $activePage == 'payments' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('payments') }}">
                <i class="material-icons">next_week</i>
                <p>{{ __('المدفوعات') }}</p>
            </a>
        </li>
        <li class="nav-item{{ $activePage == 'safe' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('safe') }}">
                <i class="material-icons">local_atm</i>
                <p>{{ __('الخزينة') }}</p>
            </a>
        </li>
        <li class="nav-item{{ $activePage == 'reports' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('reports') }}">
                <i class="material-icons">report</i>
                <p>{{ __('التقارير') }}</p>
            </a>
        </li>
        <li class="nav-item{{ $activePage == 'basics' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('basics') }}">
                <i class="material-icons">notifications</i>
                <p>{{ __('بيانات أساسية') }}</p>
            </a>
        </li>
        <!--End Customize My system-->
        <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Laravel Examples') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
        <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>
        <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
        <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
        <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
        <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
        <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
