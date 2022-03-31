<!--begin::Aside-->
<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
	<!--begin::Brand-->
	<div class="aside-logo flex-column-auto" id="kt_aside_logo">
		<!--begin::Logo-->
		<a href="/">
			<img alt="Logo" src="<?php echo base_url(); ?>assets/dist/metronic/media/logos/logo-1-dark.svg" class="h-25px logo" />
		</a>
		<!--end::Logo-->
		<!--begin::Aside toggler-->
		<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
			<span class="svg-icon svg-icon-1 rotate-180">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="black" />
					<path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="black" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Aside toggler-->
	</div>
	<!--end::Brand-->
	<!--begin::Aside menu-->
	<div class="aside-menu flex-column-fluid">
		<!--begin::Aside Menu-->
		<div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
			<!--begin::Menu-->
			<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
				<div class="menu-item">
					<div class="menu-content pt-8 pb-2">
						<span class="menu-section text-muted text-uppercase fs-8 ls-1">MAIN NAVIGATION</span>
					</div>
				</div>
				<?php foreach ($menu as $parent => $parent_params): ?>

					<?php if ( empty($page_auth[$parent_params['url']]) || $this->ion_auth->in_group($page_auth[$parent_params['url']]) ): ?>
					<?php if ( empty($parent_params['children']) ): ?>

						<?php $active = ($current_uri==$parent_params['url'] || $ctrler==$parent); ?>
						<div class="menu-item <?php if ($active) echo 'here show'; ?>">
							<a class="menu-link" href="<?php echo $parent_params['url']; ?>" title="" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" data-bs-original-title="Build your layout and export HTML for server side integration">
								<span class="menu-icon">
									<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
									<span class="svg-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
											<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"></rect>
											<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"></rect>
											<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"></rect>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</span>
								<span class="menu-title"><?php echo $parent_params['name']; ?></span>
							</a>
						</div>

					<?php else: ?>
						<?php $parent_active = ($ctrler==$parent); ?>
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion <?php if ($parent_active) echo 'here show'; ?>">
							<span class="menu-link">
								<span class="menu-icon">
									<!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
									<span class="svg-icon svg-icon-2">
										<?php if( $parent == 'user' ) { ?> 
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black"></path>
												<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black"></rect>
											</svg>
										<?php } else if( $parent == 'panel' ) { ?>
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="currentColor"></path>
												<path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="currentColor"></path>
												<path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="currentColor"></path>
												<path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="currentColor"></path>
											</svg>
										<?php } else if( $parent == 'util' ) { ?>
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M21 18.3V4H20H5C4.4 4 4 4.4 4 5V20C10.9 20 16.7 15.6 19 9.5V18.3C18.4 18.6 18 19.3 18 20C18 21.1 18.9 22 20 22C21.1 22 22 21.1 22 20C22 19.3 21.6 18.6 21 18.3Z" fill="black"></path>
												<path d="M22 4C22 2.9 21.1 2 20 2C18.9 2 18 2.9 18 4C18 4.7 18.4 5.29995 18.9 5.69995C18.1 12.6 12.6 18.2 5.70001 18.9C5.30001 18.4 4.7 18 4 18C2.9 18 2 18.9 2 20C2 21.1 2.9 22 4 22C4.8 22 5.39999 21.6 5.79999 20.9C13.8 20.1 20.1 13.7 20.9 5.80005C21.6 5.40005 22 4.8 22 4Z" fill="black"></path>
											</svg>
										<?php } else if( $parent == 'logout' ) { ?>
										<?php } else { ?>
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
												<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"></rect>
												<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"></rect>
												<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"></rect>
											</svg>
										<?php } ?>
									</span>
									<!--end::Svg Icon-->
								</span>
								<span class="menu-title"><?php echo $parent_params['name']; ?></span>
								<span class="menu-arrow"></span>
							</span>
							<div class="menu-sub menu-sub-accordion menu-active-bg">
								<?php foreach ($parent_params['children'] as $name => $url): ?>
									<?php if ( empty($page_auth[$url]) || $this->ion_auth->in_group($page_auth[$url]) ): ?>
									<?php $child_active = ($current_uri==$url); ?>
									<div class="menu-item">
										<a class="menu-link <?php if ($child_active) echo 'active'; ?>" href="<?php echo $url; ?>">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title"><?php echo $name; ?></span>
										</a>
									</div>
									<?php endif; ?>
								<?php endforeach; ?>
								
							</div>
						</div>				

					<?php endif; ?>
					<?php endif; ?>

				<?php endforeach; ?>

				<div class="menu-item">
					<div class="menu-content pt-8 pb-2">
						<span class="menu-section text-muted text-uppercase fs-8 ls-1">USEFUL LINKS</span>
					</div>
				</div>

				<?php if ( !empty($useful_links) ): ?>
					<?php foreach ($useful_links as $link): ?>
						<?php if ($this->ion_auth->in_group($link['auth']) ): ?>
							<div class="menu-item <?php if ($active) echo 'here show'; ?>">
								<a class="menu-link" href="<?php echo starts_with($link['url'], 'http') ? $link['url'] : base_url($link['url']); ?>" title="" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right" data-bs-original-title="Build your layout and export HTML for server side integration" target='<?php echo $link['target']; ?>'>
									<span class="menu-icon">
										<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
										<span class="svg-icon svg-icon-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
												<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"></rect>
												<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"></rect>
												<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"></rect>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-title"><?php echo $link['name']; ?></span>
								</a>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
				<?php endif; ?>

			</div>
			<!--end::Menu-->
		</div>
		<!--end::Aside Menu-->
	</div>
	<!--end::Aside menu-->
</div>
<!--end::Aside-->
