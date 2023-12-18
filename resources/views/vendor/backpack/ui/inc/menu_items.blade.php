{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Comments" icon="la la-question" :link="backpack_url('comment')" />
<x-backpack::menu-item title="Music comments" icon="la la-question" :link="backpack_url('music-comment')" />
<x-backpack::menu-item title="Musics" icon="la la-question" :link="backpack_url('musics')" />
<x-backpack::menu-item title="News" icon="la la-question" :link="backpack_url('news')" />
<x-backpack::menu-item title="Users" icon="la la-question" :link="backpack_url('user')" />
<x-backpack::menu-item title="User comments" icon="la la-question" :link="backpack_url('user-comment')" />
<x-backpack::menu-item title="User music" icon="la la-question" :link="backpack_url('user-music')" />
<x-backpack::menu-item title="Admins" icon="la la-question" :link="backpack_url('admin')" />
<x-backpack::menu-item title="News comments" icon="la la-question" :link="backpack_url('news-comment')" />
