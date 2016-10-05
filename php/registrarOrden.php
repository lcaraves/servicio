<?php 
	require_once 'conexion.php';
	$articuloNuevo = '';
	$tipoArticulo = $_REQUEST['select1'];
	$marcaNotebook = $_REQUEST['select2'];
	$marcaNetbook = $_REQUEST['select3'];
	$marcaAllinOne = $_REQUEST['select6'];
	$marcaMonitor = $_REQUEST['select4'];
	$marcaImpresora = $_REQUEST['select9'];
	$comentariosOtrosArticulos = $_REQUEST['comentariosOtros'];

	if ($tipoArticulo == "PC - Escritorio") {
		$articuloNuevo = $_REQUEST['select1'];
	} else {
		if ($tipoArticulo =="Notebook") {

			switch ($marcaNotebook) {
				case 'Acer':
					$nuevaVisita = 1;
					break;
				case 'Sony':
					$nuevaVisita = 2;
					break;
				case 'Lenovo':
					$nuevaVisita = 3;
					break;
				case 'Apple':
					$nuevaVisita = 4;
					break;
				case 'Samsung':
					$nuevaVisita = 5;
					break;
				case 'Positivo BGH':
					$nuevaVisita = 6;
					break;
				case 'Toshiba':
					$nuevaVisita = 7;
					break;
				case 'Compaq':
					$nuevaVisita = 8;
					break;
				case 'PcBox':
					$nuevaVisita = 9;
					break;
				case 'HP':
					$nuevaVisita = 10;
					break;
				case 'Noblex':
					$nuevaVisita = 11;
					break;
				case 'TCL':
					$nuevaVisita = 12;
					break;
				case 'Asus':
					$nuevaVisita = 13;
					break;
				case 'Msi':
					$nuevaVisita = 14;
					break;
				case 'Bangho':
					$nuevaVisita = 15;
					break;
				case 'Dell':
					$nuevaVisita = 16;
						break;	
				case 'RCA':
					$nuevaVisita = 17;
					break;
				case 'EuroCase':
					$nuevaVisita = 18;
					break;
				case 'Novatech':
					$nuevaVisita = 19;
					break;
				case 'EXO':
					$nuevaVisita = 20;
					break;	
			}

			$Bateria = '';
			if (isset($_REQUEST['Bateria'])) {
				$Bateria = $_REQUEST['Bateria'];
			} else{
				$Bateria = '';
			}
			$Funda = '';
			if (isset($_REQUEST['Funda'])) {
				$Funda = $_REQUEST['Funda'];
			} else {
				$Funda = '';
			}
			$Cargador = '';
			if (isset($_REQUEST['Cargador'])) {
				$Cargador = $_REQUEST['Cargador'];
			} else {
				$Cargador = '';
			}

			if ($Bateria == '' && $Funda == '' && $Cargador == '') {
				$articuloNuevo = $tipoArticulo . ' - ' . $marcaNotebook;
			} else {
				if ($Bateria != '' && $Funda == '' && $Cargador == '') {
					$articuloNuevo = $tipoArticulo . ' - ' . $marcaNotebook . 'Con ' .$Bateria;
				} else {
					if ($Bateria != '' && $Funda != '' && $Cargador == '') {
						$articuloNuevo = $tipoArticulo . ' - ' . $marcaNotebook . ' Con ' .$Bateria. ' - ' .$Funda;
					} else {
						if ($Bateria != '' && $Funda == '' && $Cargador != '') {
							$articuloNuevo = $tipoArticulo . ' - ' . $marcaNotebook . ' Con ' .$Bateria. ' - ' .$Cargador;
						} else {
							if ($Bateria != '' && $Funda != '' && $Cargador != '') {
								$articuloNuevo = $tipoArticulo . ' - ' . $marcaNotebook . ' Con ' .$Bateria. ' - ' .$Funda . ' - ' .$Cargador;
							} else {
								if ($Bateria == '' && $Funda != '' && $Cargador != '') {
									$articuloNuevo = $tipoArticulo . ' - ' . $marcaNotebook . ' Con '.$Funda . ' - ' .$Cargador;
								} else {
									if ($Bateria == '' && $Funda == '' && $Cargador != '') {
										$articuloNuevo = $tipoArticulo . ' - ' . $marcaNotebook . ' Con ' .$Cargador;
									} else {
										if ($Bateria == '' && $Funda != '' && $Cargador == '') {
											$articuloNuevo = $tipoArticulo . ' - ' . $marcaNotebook . ' Con ' .$Funda;
										} else {
											$articuloNuevo = $tipoArticulo . ' - ' . $marcaNotebook . ' Con ' .$Cargador. ' - ' .$Funda;
										}
										
									}
									
								}
								
							}
							
						}
						
					}
					
				}
				
			}

			$consultaNotebook = "UPDATE notebook SET nrovisita = nrovisita + (1) WHERE idNotebook = $nuevaVisita";
			mysqli_query($conexion, $consultaNotebook) or die ("Problemas -->".mysqli_error($conexion));
		} else {
			if ($tipoArticulo == "Netbook") {
					
					switch ($marcaNetbook) {
						case 'Acer':
							$nuevaVisita = 1;
							break;
						case 'Sony':
							$nuevaVisita = 2;
							break;
						case 'RCA':
							$nuevaVisita = 3;
							break;
						case 'Samsung':
							$nuevaVisita = 4;
							break;
						case 'Positiva - BGH':
							$nuevaVisita = 5;
							break;
						case 'Lenovo':
							$nuevaVisita = 6;
							break;
						case 'Toshiba':
							$nuevaVisita = 7;
							break;
						case 'PcBox':
							$nuevaVisita = 8;
							break;
						case 'Bangho':
							$nuevaVisita = 9;
							break;
					}


					$Bateria = '';
					if (isset($_REQUEST['Bateria'])) {
						$Bateria = $_REQUEST['Bateria'];
					} else {
						$Bateria ='';
					}
					$Funda = '';
					if (isset($_REQUEST['Funda'])) {
						$Funda = $_REQUEST['Funda'];
					}else{
						$Funda = '';	
					}
					$Cargador = '';
					if (isset($_REQUEST['Cargador'])) {
						$Cargador = $_REQUEST['Cargador'];
					}else{
						$Cargador ='';
					}

					if ($Bateria == '' && $Funda == '' && $Cargador == '') {
						$articuloNuevo = $tipoArticulo . ' - ' . $marcaNetbook;
					} else {
						if ($Bateria != '' && $Funda == '' && $Cargador == '') {
							$articuloNuevo = $tipoArticulo . ' - ' . $marcaNetbook . ' Con ' .$Bateria;
						} else {
							if ($Bateria != '' && $Funda != '' && $Cargador == '') {
								$articuloNuevo = $tipoArticulo . ' - ' . $marcaNetbook . ' Con ' .$Bateria. ' - ' .$Funda;
							} else {
								if ($Bateria != '' && $Funda == '' && $Cargador != '') {
									$articuloNuevo = $tipoArticulo . ' - ' . $marcaNetbook . ' Con ' .$Bateria. ' - ' .$Cargador;
								} else {
									if ($Bateria != '' && $Funda != '' && $Cargador != '') {
										$articuloNuevo = $tipoArticulo . ' - ' . $marcaNetbook . ' Con ' .$Bateria. ' - ' .$Funda . ' - ' .$Cargador;
									} else {
										if ($Bateria == '' && $Funda != '' && $Cargador != '') {
											$articuloNuevo = $tipoArticulo . ' - ' . $marcaNetbook . ' Con '.$Funda . ' - ' .$Cargador;
										} else {
											if ($Bateria == '' && $Funda == '' && $Cargador != '') {
												$articuloNuevo = $tipoArticulo . ' - ' . $marcaNetbook . ' Con ' .$Cargador;
											} else {
												if ($Bateria == '' && $Funda != '' && $Cargador == '') {
													$articuloNuevo = $tipoArticulo . ' - ' . $marcaNetbook . ' Con ' .$Funda;
												} else {
													$articuloNuevo = $tipoArticulo . ' - ' . $marcaNetbook . ' Con ' .$Cargador. ' - ' .$Funda;
												}
												
											}
											
										}
										
									}
									
								}
								
							}
							
						}
						
					}
					$consultaNetbook = "UPDATE netbook SET nrovisita = nrovisita + (1) WHERE idNetbook = $nuevaVisita";
					mysqli_query($conexion, $consultaNetbook) or die ("Problemas -->".mysqli_error($conexion));
				} else {
					if ($tipoArticulo == "All in One") {
						$articuloNuevo = $tipoArticulo . ' - ' . $marcaAllinOne;

						$Cargador = '';
						if (isset($_REQUEST['Cargador'])) {
							$Cargador = $_REQUEST['Cargador'];
						}
						$Teclado = '';
						if (isset($_REQUEST['Teclado'])) {
							$Teclado = $_REQUEST['Teclado'];
						}
						$Mouse = '';
						if (isset($_REQUEST['Mouse'])) {
							$Mouse = $_REQUEST['Mouse'];
						}

						if ($Cargador == '' && $Teclado == '' && $Mouse == '') {
							$articuloNuevo = $tipoArticulo . ' - ' . $marcaAllinOne;
						} else {
							if ($Cargador != '' && $Teclado == '' && $Mouse == '') {
								$articuloNuevo = $tipoArticulo . ' - ' . $marcaAllinOne . ' Con ' .$Cargador;
							} else {
								if ($Cargador != '' && $Teclado != '' && $Mouse == '') {
									$articuloNuevo = $tipoArticulo . ' - ' . $marcaAllinOne . ' Con ' .$Cargador. ' - ' .$Teclado;
								} else {
									if ($Cargador != '' && $Teclado == '' && $Mouse != '') {
										$articuloNuevo = $tipoArticulo . ' - ' . $marcaAllinOne . ' Con ' .$Cargador. ' - ' .$Mouse;
									} else {
										if ($Cargador != '' && $Teclado != '' && $Mouse != '') {
											$articuloNuevo = $tipoArticulo . ' - ' . $marcaAllinOne . ' Con ' .$Cargador. ' - ' .$Teclado . ' - ' .$Mouse;
										} else {
											if ($Cargador == '' && $Teclado != '' && $Mouse != '') {
												$articuloNuevo = $tipoArticulo . ' - ' . $marcaAllinOne . ' Con '.$Teclado . ' - ' .$Mouse;
											} else {
												if ($Cargador == '' && $Teclado == '' && $Mouse != '') {
													$articuloNuevo = $tipoArticulo . ' - ' . $marcaAllinOne . ' Con ' .$Mouse;
												} else {
													if ($Cargador == '' && $Teclado != '' && $Mouse == '') {
														$articuloNuevo = $tipoArticulo . ' - ' . $marcaAllinOne . ' Con ' .$Teclado;
													} else {
														$articuloNuevo = $tipoArticulo . ' - ' . $marcaAllinOne . ' Con ' .$Mouse. ' - ' .$Teclado;
													}
													
												}
												
											}
											
										}
										
									}
									
								}
								
							}
							
						}

					} else {
						if ($tipoArticulo == "Monitor") {
							$articuloNuevo = $tipoArticulo . ' - ' . $marcaMonitor;
						} else {
							if ($tipoArticulo == "Otros") {
								$articuloNuevo = $tipoArticulo . ' - '. $comentariosOtrosArticulos;
							} else{
								if ($tipoArticulo == "Impresora") {
									
									$Tonner = '';
									if (isset($_REQUEST['Tonner'])) {
										$Tonner = $_REQUEST['Tonner'];
									}
									$Cargador = '';
									if (isset($_REQUEST['Cargador'])) {
										$Cargador = $_REQUEST['Cargador'];
									}
									$CableUSB = '';
									if (isset($_REQUEST['CableUSB'])) {
										$CableUSB = $_REQUEST['CableUSB'];
									}

									if ($Tonner == '' && $Cargador == '' && $CableUSB == '') {
										$articuloNuevo = $tipoArticulo . ' - '. $marcaImpresora. ' - ' .$_REQUEST['modeloImpresora'];
									} else {
										if ($Tonner != '' && $Cargador == '' && $CableUSB == '') {
											$articuloNuevo = $tipoArticulo . ' - ' . $marcaImpresora . ' - ' .$_REQUEST['modeloImpresora']. ' Con ' .$Tonner;
										} else {
											if ($Tonner != '' && $Cargador != '' && $CableUSB == '') {
												$articuloNuevo = $tipoArticulo . ' - ' . $marcaImpresora . ' - ' .$_REQUEST['modeloImpresora']. ' Con ' .$Tonner. ' - ' .$Cargador;
											} else {
												if ($Tonner != '' && $Cargador == '' && $CableUSB != '') {
													$articuloNuevo = $tipoArticulo . ' - ' . $marcaImpresora . ' - ' .$_REQUEST['modeloImpresora']. ' Con ' .$Tonner. ' - ' .$CableUSB;
												} else {
													if ($Tonner != '' && $Cargador != '' && $CableUSB != '') {
														$articuloNuevo = $tipoArticulo . ' - ' . $marcaImpresora . ' - ' .$_REQUEST['modeloImpresora']. ' Con ' .$Tonner. ' - ' .$Cargador. ' - ' .$CableUSB;
													} else {
														if ($Tonner == '' && $Cargador != '' && $CableUSB != '') {
															$articuloNuevo = $tipoArticulo . ' - ' . $marcaImpresora . ' - '.$_REQUEST['modeloImpresora']. ' Con ' .$Cargador. ' - ' .$CableUSB;
														} else {
															if ($Tonner == '' && $Cargador == '' && $CableUSB != '') {
																$articuloNuevo = $tipoArticulo . ' - ' . $marcaImpresora . ' - ' .$_REQUEST['modeloImpresora']. ' Con '  .$CableUSB;
															} else {
																if ($Tonner == '' && $Cargador != '' && $CableUSB == '') {
																	$articuloNuevo = $tipoArticulo . ' - ' . $marcaImpresora . ' - ' .$_REQUEST['modeloImpresora']. ' Con ' .$Cargador;
																} else {
																	$articuloNuevo = $tipoArticulo . ' - ' . $marcaImpresora . ' - ' .$_REQUEST['modeloImpresora']. ' Con ' .$Cargador. ' - ' .$CableUSB;
																}
																
															}
															
														}
														
													}
													
												}
												
											}
											
										}
										
									}
								}
							}
						}
					}
					

				}
					
		} 
		/**/
	}
	
	
	if (isset($_REQUEST['accesorios'])) {
		$accesorios = $_REQUEST['accesorios'];
		}
		else{
		$accesorios = 'No tiene accesorios';
	}
	
	if (isset($_REQUEST['serial'])) {
		$serial = $_REQUEST['serial'];	
		}
		else{
		$serial = 'No se agrego';
	}
	
	if (isset($_REQUEST['codigo'])) {
		$codigo = $_REQUEST['codigo'];	
		}
		else{
			$codigo = 'No se agrego';
	}

	// Programas a instalar
	if (isset($_REQUEST['sistemaOperativo'])) {
		$sistemaOperativo = $_REQUEST['sistemaOperativo'];	
		} else {
		$sistemaOperativo = '';
	}
	
	if (isset($_REQUEST['tipoArqui'])) {
		$tipoArqui = $_REQUEST['tipoArqui'];
		} else {
		$tipoArqui = '';
	}
	
	if (isset($_REQUEST['office'])) {
		$office = $_REQUEST['office'];
		} else {
		$office ='';
	}
	
	if (isset($_REQUEST['sketshup'])) {
		$gSketshup = $_REQUEST['sketshup'];
		} else {
		$gSketshup = '';
	}
	
	if (isset($_REQUEST['vray'])) {
		$gVray = $_REQUEST['vray'];
		} else {
		$gVray = '';
	}

	if (isset($_REQUEST['archi'])) {
		$archi = $_REQUEST['archi'];
		} else {
		$archi = '';
	}
	
	if (isset($_REQUEST['tipoAutoCad'])) {
		$tipoAutoCad = $_REQUEST['tipoAutoCad'];
		} else {
		$tipoAutoCad = '';
	}
	
	if (isset($_REQUEST['adobe'])) {
		$adobe = $_REQUEST['adobe'];
		} else {
		$adobe = '';
	}
	
	if (isset($_REQUEST['corel'])) {
		$corel = $_REQUEST['corel'];
		} else {
		$corel = '';
	}
	
	if (isset($_REQUEST['seleccionCorel'])) {
		$listaCorel = $_REQUEST['seleccionCorel'];
		} else {
		$listaCorel = '';
	}
	
	if (isset($_REQUEST['listaAdobe'])) {
		$lista_adobe = $_REQUEST['listaAdobe'];
		foreach ($lista_adobe as $adobes) {
			$valor = "".$adobes."";
			$listaAdobe_aux[] = $valor;
		}
		$valores = implode(", ", $listaAdobe_aux);
		$programasAdobe = "(" .$valores. ")";
	} else {
		$lista_adobe = '';
	}

	if (!empty($sistemaOperativo) && !empty($office) && !empty($corel) && !empty($adobe) && !empty($gSketshup) && !empty($gVray) && !empty($archi) && !empty($tipoAutoCad)) {
		$instaladores = $sistemaOperativo .'-'. $tipoArqui .". Con " .$office.". Prog. de Diseño: ".$corel.": ".$listaCorel.".".$adobe.":".$programasAdobe.". Prog. de Arqui: ".$gSketshup." - ".$gVray." - ".$archi." - ".$tipoAutoCad.".";
	} else {
		if (empty($sistemaOperativo) && !empty($office) && !empty($corel) && !empty($adobe) && !empty($gSketshup) && !empty($gVray) && !empty($archi) && !empty($tipoAutoCad)) {
			$instaladores = "Con " .$office.". Prog. de Diseño: ".$corel.": ".$listaCorel.".".$adobe.":".$programasAdobe.". Prog. de Arqui: ".$gSketshup." - ".$gVray." - ".$archi." - ".$tipoAutoCad.".";
		} else {
			if (empty($sistemaOperativo) && empty($office) && !empty($corel) && !empty($adobe) && !empty($gSketshup) && !empty($gVray) && !empty($archi) && !empty($tipoAutoCad)) {
				$instaladores = "Prog. de Diseño: ".$corel.": ".$listaCorel.".".$adobe.":".$programasAdobe.". Prog. de Arqui: ".$gSketshup." - ".$gVray." - ".$archi." - ".$tipoAutoCad.".";
			} else {
				if (empty($sistemaOperativo) && empty($office) && empty($corel) && !empty($adobe) && !empty($gSketshup) && !empty($gVray) && !empty($archi) && !empty($tipoAutoCad)) {
					$instaladores = "Prog. de Diseño: ".$adobe.":".$programasAdobe.". Prog. de Arqui: ".$gSketshup." - ".$gVray." - ".$archi." - ".$tipoAutoCad.".";
				} else {
					if (empty($sistemaOperativo) && empty($office) && empty($corel) && empty($adobe) && !empty($gSketshup) && !empty($gVray) && !empty($archi) && !empty($tipoAutoCad)) {
						$instaladores = "Prog. de Arqui: ".$gSketshup." - ".$gVray." - ".$archi." - ".$tipoAutoCad.".";
					} else {
						if (empty($sistemaOperativo) && empty($office) && empty($corel) && empty($adobe) && empty($gSketshup) && !empty($gVray) && !empty($archi) && !empty($tipoAutoCad)) {
							$instaladores = "Prog. de Arqui: ".$gVray." - ".$archi." - ".$tipoAutoCad.".";
						} else {
							if (empty($sistemaOperativo) && empty($office) && empty($corel) && empty($adobe) && empty($gSketshup) && empty($gVray) && !empty($archi) && !empty($tipoAutoCad)) {
								$instaladores = "Prog. de Arqui.: ".$archi." - ".$tipoAutoCad.".";
							} else {
								if (empty($sistemaOperativo) && empty($office) && empty($corel) && empty($adobe) && empty($gSketshup) && empty($gVray) && empty($archi) && !empty($tipoAutoCad)) {
									$instaladores = "Prog. de Arqui: ".$tipoAutoCad.".";
								} else {
									if (!empty($sistemaOperativo) && !empty($office) && empty($corel) && empty($adobe) && empty($gSketshup) && empty($gVray) && empty($archi) && empty($tipoAutoCad)) {
										$instaladores = $sistemaOperativo .'-'. $tipoArqui .". Con " .$office.".";
									} else {
										if (empty($sistemaOperativo) && !empty($office) && empty($corel) && empty($adobe) && empty($gSketshup) && empty($gVray) && empty($archi) && empty($tipoAutoCad)) {
											$instaladores = "Con " .$office.".";
										} else {
											if (empty($sistemaOperativo) && empty($office) && !empty($corel) && !empty($adobe) && empty($gSketshup) && empty($gVray) && empty($archi) && empty($tipoAutoCad)) {
												$instaladores = "Prog. de Diseño: ".$corel.": ".$listaCorel.".".$adobe.":".$programasAdobe;
											} else {
												if (empty($sistemaOperativo) && empty($office) && !empty($corel) && empty($adobe) && empty($gSketshup) && empty($gVray) && empty($archi) && empty($tipoAutoCad)) {
													$instaladores = "Prog. de Diseño: ".$corel.": ".$listaCorel.".";
												} else {
													if (empty($sistemaOperativo) && empty($office) && empty($corel) && !empty($adobe) && empty($gSketshup) && empty($gVray) && empty($archi) && empty($tipoAutoCad)) {
														$instaladores = "Prog. de Diseño: ".$adobe.":".$programasAdobe;
													} else {
														if (empty($sistemaOperativo) && empty($office) && empty($corel) && empty($adobe) && !empty($gSketshup) && !empty($gVray) && empty($archi) && !empty($tipoAutoCad)) {
															$instaladores = "Prog. de Arqui: ".$gSketshup." - ".$gVray." - ".$tipoAutoCad.".";
														} else {
															if (empty($sistemaOperativo) && empty($office) && empty($corel) && empty($adobe) && empty($gSketshup) && !empty($gVray) && !empty($archi) && !empty($tipoAutoCad)) {
																$instaladores = "Prog. de Arqui: ".$gVray." - ".$archi." . ";
															} else {
																if (empty($sistemaOperativo) && empty($office) && empty($corel) && empty($adobe) && !empty($gSketshup) && !empty($gVray) && empty($archi) && empty($tipoAutoCad)) {
																	$instaladores = "Prog. de Arqui: ".$gSketshup." - ".$gVray;
																} else {
																	if (empty($sistemaOperativo) && empty($office) && empty($corel) && empty($adobe) && !empty($gSketshup) && !empty($gVray) && !empty($archi) && empty($tipoAutoCad)) {
																		$instaladores = "Prog. de Arqui: ".$gSketshup." - ".$gVray." - ".$archi.".";
																	} else {
																		if (empty($sistemaOperativo) && empty($office) && empty($corel) && empty($adobe) && empty($gSketshup) && empty($gVray) && !empty($archi) && empty($tipoAutoCad)) {
																			$instaladores = "Prog. de Arqui: ".$archi.".";
																		} else {
																			if (empty($sistemaOperativo) && empty($office) && empty($corel) && empty($adobe) && empty($gSketshup) && !empty($gVray) && empty($archi) && empty($tipoAutoCad)) {
																				$instaladores = "Prog. de Arqui: ".$gVray.".";	
																			} else {
																				if (empty($sistemaOperativo) && empty($office) && empty($corel) && empty($adobe) && empty($gSketshup) && !empty($gVray) && empty($archi) && !empty($tipoAutoCad)) {
																					$instaladores = "Prog. de Arqui: ".$gVray." - ".$tipoAutoCad.".";
																				} else {
																					if (empty($sistemaOperativo) && empty($office) && empty($corel) && empty($adobe) && !empty($gSketshup) && empty($gVray) && empty($archi) && !empty($tipoAutoCad)) {
																						$instaladores = "Prog. de Arqui: ".$gSketshup." - ".$tipoAutoCad.".";
																					} else {
																						if (!empty($sistemaOperativo) && !empty($office) && empty($corel) && empty($adobe) && !empty($gSketshup) && !empty($gVray) && !empty($archi) && !empty($tipoAutoCad)) {
																							$instaladores = $sistemaOperativo .'-'. $tipoArqui .". Con " .$office.". "." Prog. de Arqui: ".$gSketshup." - ".$gVray." - ".$archi." - ".$tipoAutoCad.".";
																						} else {
																							if (!empty($sistemaOperativo) && !empty($office) && empty($corel) && empty($adobe) && !empty($gSketshup) && !empty($gVray) && !empty($archi) && empty($tipoAutoCad)) {
																								$instaladores = $sistemaOperativo .'-'. $tipoArqui .". Con " .$office.". "." Prog. de Arqui: ".$gSketshup." - ".$gVray." - ".$archi." .";
																							} else {
																								if (!empty($sistemaOperativo) && !empty($office) && empty($corel) && empty($adobe) && !empty($gSketshup) && !empty($gVray) && empty($archi) && empty($tipoAutoCad)) {
																									$instaladores = $sistemaOperativo .'-'. $tipoArqui .". Con " .$office.". "." Prog. de Arqui: ".$gSketshup." - ".$gVray." .";
																								} else {
																									if (!empty($sistemaOperativo) && !empty($office) && empty($corel) && empty($adobe) && !empty($gSketshup) && empty($gVray) && empty($archi) && empty($tipoAutoCad)) {
																										$instaladores = $sistemaOperativo .'-'. $tipoArqui .". Con " .$office.". "." Prog. de Arqui: ".$gSketshup." .";
																									} else {
																										if (!empty($sistemaOperativo) && !empty($office) && empty($corel) && empty($adobe) && !empty($gSketshup) && empty($gVray) && empty($archi) && !empty($tipoAutoCad)) {
																											$instaladores = $sistemaOperativo .'-'. $tipoArqui .". Con " .$office.". "." Prog. de Arqui: ".$gSketshup." - ".$tipoAutoCad.".";
																										} else {
																											if (!empty($sistemaOperativo) && !empty($office) && empty($corel) && empty($adobe) && !empty($gSketshup) && empty($gVray) && !empty($archi) && empty($tipoAutoCad)) {
																												$instaladores = $sistemaOperativo .'-'. $tipoArqui .". Con " .$office.". "." Prog. de Arqui: ".$gSketshup." - ".$archi." .";
																											} else {
																												if (!empty($sistemaOperativo) && !empty($office) && empty($corel) && empty($adobe) && empty($gSketshup) && !empty($gVray) && empty($archi) && !empty($tipoAutoCad)) {
																													$instaladores = $sistemaOperativo .'-'. $tipoArqui .". Con " .$office.". "." Prog. de Arqui: ".$gVray." - ".$tipoAutoCad.".";
																												} else {
																													if (!empty($sistemaOperativo) && !empty($office) && empty($corel) && empty($adobe) && empty($gSketshup) && !empty($gVray) && !empty($archi) && empty($tipoAutoCad)) {
																														$instaladores = $sistemaOperativo .'-'. $tipoArqui .". Con " .$office.". "." Prog. de Arqui: ".$gVray." - ".$archi." . ";
																													} else {
																														if (!empty($sistemaOperativo) && !empty($office) && empty($corel) && empty($adobe) && empty($gSketshup) && !empty($gVray) && !empty($archi) && !empty($tipoAutoCad)) {
																															$instaladores = $sistemaOperativo .'-'. $tipoArqui .". Con " .$office.". "." Prog. de Arqui: ".$gVray." - ".$archi." - ".$tipoAutoCad.".";
																														} else {
																															$instaladores ='';
																														}
																														
																													}
																													
																												}
																												
																											}
																											
																										}
																										
																									}
																									
																								}
																								
																							}
																							
																						}
																						
																					}
																					
																				}
																			}
																			
																		}
																		
																	}
																	
																}
																
															}
															
														}
														
													}
													
												}
												
											}
											
										}
										
									}
									
								}
								
							}
							
						}
						
					}
					
				}
				
			}
			
		}
		
	}
	
	$fallaCliente = $_REQUEST['fallaCliente'];
	if (!empty($fallaCliente)) {
		if (strlen($fallaCliente)>160) {
			$errors [] = "El campo Falla de Cliente es mayor que 160 Caracteres.";
		} 
	} else{
		$errors [] = "El campo esta vacio.";
	}
	
	
	
	$consultaProductos = "INSERT INTO productos (articulo, fallaCliente, estadoEquipo, serial,idCliente , fechaIngreso, accesorios, codigo, horarioLlamada, instaladores ) 
						  VALUES
						  (
						  	'$articuloNuevo',
							'$fallaCliente',
							'$_REQUEST[estadoEquipo]',
							'$serial',
							'$_REQUEST[seleccionCliente]',
							'$_REQUEST[fechaIngreso]',
							'$accesorios',
							'$codigo',
							'$_REQUEST[horarioLlamada]',
							'$instaladores'
						  )";
	mysqli_query($conexion, $consultaProductos) or die ("Problemas -->".mysqli_error($conexion));
	$msj [] = "El Registro de Orden de Servicio se ha realizado Correctamente.";
	mysqli_close($conexion);
 

	if (isset($msj)) {
	?>	
		<div class="alert alert-success" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>¡Bien hecho!</strong>
					<?php
						foreach ($msj as $msjs) {
							echo $msjs;
						}
					?>
			</div>
	<?php 
	} 
	 
	if (isset($errors)) {
		?>
			<div class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Error!</strong> 
				<?php
					foreach ($errors as $error) {
						echo $error;
					}
				?>
			</div>
			<?php
			}
	
	 ?>
	

 