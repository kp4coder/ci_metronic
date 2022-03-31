<!--begin::Toolbar-->
<div class="toolbar" id="kt_toolbar">
	<!--begin::Container-->
	<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
		<!--begin::Page title-->
		<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
			<!--begin::Title
			<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Dashboard
			<!--begin::Separator
			<span class="h-20px border-1 border-gray-200 border-start ms-3 mx-2 me-1"></span>
			<!--end::Separator-->
			<!--begin::Description-->

			<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
				<?php
					for ($i=0; $i<sizeof($breadcrumb); $i++)
					{
						$active = ($i==sizeof($breadcrumb)-1 || $breadcrumb[$i]['url']=='#') ? 'active' : '';
						$name = $breadcrumb[$i]['name'];

						if ($active)
						{
							?>
							<!--begin::Item-->
							<li class="breadcrumb-item text-dark"><?php echo $name; ?></li>
							<!--end::Item-->
							<?php
						}
						else
						{
							?>
							<!--begin::Item-->
							<li class="breadcrumb-item text-muted">
								<a href="<?php echo $breadcrumb[$i]['url']; ?>" class="text-muted text-hover-primary">
									<?php echo $name; ?></a>
							</li>
							<!--end::Item-->
							<!--begin::Item-->
							<li class="breadcrumb-item">
								<span class="bullet bg-gray-300 w-5px h-2px"></span>
							</li>
							<?php
						}
					}
				?>
			</ul>


			<!--end::Description--></h1>
			<!--end::Title-->
		</div>
		<!--end::Page title-->
	</div>
	<!--end::Container-->
</div>
<!--end::Toolbar-->