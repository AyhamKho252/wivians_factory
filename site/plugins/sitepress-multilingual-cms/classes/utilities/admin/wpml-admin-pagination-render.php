<?php

class WPML_Admin_Pagination_Render {

	const TEMPLATE = 'pagination.twig';

	/**
	 * @var IWPML_Template_Service
	 */
	private $template;

	/**
	 * @var WPML_Admin_Pagination
	 */
	private $pagination;

	public function __construct( IWPML_Template_Service $template, WPML_Admin_Pagination $pagination ) {
		$this->template   = $template;
		$this->pagination = $pagination;
	}

	public function get_model() {
		return [
			'strings'     => self::get_strings( $this->pagination->get_total_items() ),
			'pagination'  => $this->pagination,
			'total_items' => $this->pagination->get_total_items(),
		];
	}

	public static function get_strings( $totalItems ) {
		return [
			'listNavigation' => __( 'Navigation', 'sitepress' ),
			'firstPage'      => __( 'First page', 'sitepress' ),
			'previousPage'   => __( 'Previous page', 'sitepress' ),
			'nextPage'       => __( 'Next page', 'sitepress' ),
			'lastPage'       => __( 'Last page', 'sitepress' ),
			'currentPage'    => __( 'Current page', 'sitepress' ),
			'of'             => __( 'of', 'sitepress' ),
			'totalItemsText' => sprintf(
				_n( '%s item', '%s items', $totalItems, 'sitepress' ),
				$totalItems
			),
		];
	}

	/**
	 * @param array $items
	 *
	 * @return array
	 */
	public function paginate( $items ) {
		$total       = count( $items );
		$limit       = $this->pagination->get_items_per_page(); // per page
		$total_pages = ceil( $total / $limit );
		$page        = max( $this->pagination->get_current_page(), 1 );
		$page        = min( $page, $total_pages );
		$offset      = ( $page - 1 ) * $limit;

		if ( $offset < 0 ) {
			$offset = 0;
		}

		return array_slice( $items, (int) $offset, $limit );

	}
}
