<li class="dropdown search dropdown-slide">
    <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
            class="tf-ion-ios-search-strong"></i> Search</a>
    <ul class="dropdown-menu search-dropdown">
        <li>
            <form wire:submit.prevent="searchBar">
                <input type="search" name="item" wire:model="search" class="form-control"
                    placeholder="Search..."></form>
        </li>
    </ul>
</li><!-- / Search -->
