<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
      <div>
        <img src="{{ asset('admin_assets_rtl/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
      </div>
      <div>
        <h4 class="logo-text">الطريفي مول</h4>
      </div>
      <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
      </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
      <li class="menu-label">@lang('الأقسام')</li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-users"></i>
          </div>
          <div class="menu-title">@lang('أدارة أقسام الطريفي')</div>
        </a>
        <ul>
            <li>
            <a href="{{ route("dash.maincat.index")  }}">
                <i class="bi bi-circle"></i>
                 @lang('الأقسام الرئيسية')
            </a>
            </li>
            <li>
                <a href="{{ route("dash.subcat.index")  }}">
                    <i class="bi bi-circle"></i>
                     @lang('الأقسام الفرعية')
                </a>
                </li>
        </ul>
      </li>
      <li class="menu-label">@lang('الشركات ')</li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-users"></i>
          </div>
          <div class="menu-title">@lang('أدارة  الشركات المنتجة')</div>
        </a>
        <ul>
            <li>
            <a href="{{ route("dash.company.index")  }}">
                <i class="bi bi-circle"></i>
                 @lang(' جميع الشركات المنتجة')
            </a>
            </li>

        </ul>
      </li>
      <li class="menu-label">@lang('المنتجات')</li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-users"></i>
          </div>
          <div class="menu-title">@lang('أدارة منتجات الطريفي')</div>
        </a>
        <ul>
            <li>
            <a href="{{ route("dash.product.index")  }}">
                <i class="bi bi-circle"></i>
                 @lang('جميع المنتجات')
            </a>
            </li>
        </ul>
      </li>
      <li class="menu-label">@lang('التخفيضات')</li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-users"></i>
          </div>
          <div class="menu-title">@lang('إدارة تخفيضات الطريفي')</div>
        </a>
        <ul>
            <li>
            <a href="{{ route("dash.coupon.index")  }}">
                <i class="bi bi-circle"></i>
                 @lang('جميع التخفيضات')
            </a>
            </li>
            <li>
                <a href="{{ route("dash.coupon.pro.products")  }}">
                    <i class="bi bi-circle"></i>
                     @lang('المنتجات الحاصلة على تخفيض')
                </a>
                </li>
        </ul>
      </li>

      <li class="menu-label">@lang('المناطق والتوصيل')</li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-users"></i>
          </div>
          <div class="menu-title">@lang('إدارة مناطق والتوصيل ')</div>
        </a>
        <ul>
            <li>
            <a href="{{ route("dash.area.index")  }}">
                <i class="bi bi-circle"></i>
                 @lang('جميع المناطق')
            </a>
            </li>

        </ul>
      </li>
      <li class="menu-label">@lang('المستخدمين')</li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-users"></i>
          </div>
          <div class="menu-title">@lang('إدارة  المستخدمين ')</div>
        </a>
        <ul>
            <li>
            <a href="{{ route("dash.user.index")  }}">
                <i class="bi bi-circle"></i>
                 @lang('جميع المستخدمين')
            </a>
            </li>

        </ul>
      </li>

      <li class="menu-label">@lang('الاعدادت')</li>
      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-users"></i>
          </div>
          <div class="menu-title">@lang('الاعدادات')</div>
        </a>
        <ul>
            <li>
            <a href="{{ route("dash.settings.feature.index")  }}">
                <i class="bi bi-circle"></i>
                 @lang('سمات المنتجات ')
            </a>
            </li>

        </ul>
      </li>

      <li class="menu-label">@lang('المستخدمين')</li>

      <li>
        <a href="javascript:;" class="has-arrow">
          <div class="parent-icon"><i class="lni lni-users"></i>
          </div>
          <div class="menu-title">@lang('إدارة  التسجيل ')</div>
        </a>
        <ul>
            <li>
                <a  onclick="event.preventDefault(); document.getElementById('logout-form').submit()" class="btn btn-danger btn-block">تسجيل الخروج</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
        {{-- <button class="btn btn-danger btn-block">Logout</button> --}}
    </form>
            </li>

        </ul>
      </li>













    </ul>
 </aside>
