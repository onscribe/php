<?php
namespace {
// global scope
	class Onscribe {

		function __construct( $key, $secret ){

			// interface
			$this->get = new \Onscribe\GET();
			$this->post = new \Onscribe\POST();
			$this->put = new \Onscribe\PUT();
			$this->delete = new \Onscribe\DELETE();
		}


	}
}

namespace Onscribe {

	class GET {

		public function products($id=false){
			if( !$id ); // get all

		}

		public function subscriptions($id=false){
			if( !$id ); // get all

		}
	}
	class POST {
		// currently not supported
	}
	class PUT {
		// currently not supported
	}
	class DELETE {
		// currently not supported
	}

}

?>