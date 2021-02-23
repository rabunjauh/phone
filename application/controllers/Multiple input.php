for ( $i=0;$i<sizeof($employeeNo);$i++ ){
				$loop['employeeno'] = $employeeNo[$i];
				$loop['employeename'] = $employee[$i];
				$loop['iddept'] = $department[$i];
				$loop['idposition'] = $position[$i];
				$loop['level'] = $level[$i];
				$loop['extension'] = $extension[$i];
				$this->memployee->saveEmployee($loop);
				if ( !$loop['extension'] == 0 ){
					$this->mpabx11->setStatus("1", $loop['extension']);
				}
				// redirect(base_url('cemployee/addEmployee'));
			}