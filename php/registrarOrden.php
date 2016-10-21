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

			$consultaNotebook = "UPDATE notebook SET nrovisita = nrovisita + (1) WHERE nombre = '$marcaNotebook'";
			mysqli_query($conexion, $consultaNotebook) or die ("Problemas -->".mysqli_error($conexion));
		} else {
			if ($tipoArticulo == "Netbook") {
					
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
					$consultaNetbook = "UPDATE netbook SET nrovisita = nrovisita + (1) WHERE nombre = '$marcaNetbook'";
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
	
	
	if (!empty($_REQUEST['accesorios'])) {
		if (strlen($_REQUEST['accesorios'])> 70) {
			$errors [] = "</br> El campo <strong>accesorios</strong>, es mayor que 70 Caracteres. </br>";
			$accesorios = $_REQUEST['accesorios']; 		
		} else{
			$accesorios = $_REQUEST['accesorios']; 		
		}
		} else{
		$accesorios = 'No tiene accesorios';
	}

	if (!empty($_REQUEST['serial'])) {
		if (strlen($_REQUEST['serial'])> 30) {
			$errors [] = "</br> El campo <strong>serial</strong>, es mayor que 30 Caracteres. </br>";
			$serial = $_REQUEST['serial']; 		
		} else{
			$serial = $_REQUEST['serial']; 		
		}
		}else{
		$serial = 'No se agrego Serial';
		}
	
	if (!empty($_REQUEST['codigo'])) {
		if (strlen($_REQUEST['codigo'])> 30) {
			$errors [] = " </br> El campo <strong>Codigo</strong>, es mayor que 30 Caracteres. </br>";
			$codigo = $_REQUEST['codigo']; 		
		} else{
			$codigo = $_REQUEST['codigo'];}
		}
		else{
			$codigo = 'No se agrego';
	}

	if (!empty($_REQUEST['estadoEquipo'])) {
		if (strlen($_REQUEST['estadoEquipo'])> 90) {
			$errors [] = "</br> El campo <strong>Estado del Equipo</strong>, es mayor que 90 Caracteres. </br>";
			$estadoEquipo = $_REQUEST['estadoEquipo']; 		
		} else{
			$estadoEquipo = $_REQUEST['estadoEquipo'];}
		}
		else{
			$estadoEquipo = 'No se agrego Estado del Equipo';
	}
	
	if (!empty($_REQUEST['horarioLlamada'])) {
		$horarioLlamada = $_REQUEST['horarioLlamada'];
		}
		else{
			$horarioLlamada = 'Mañana - Tarde';
	}
	//------------------------------------------------
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
	//Campo --> FALLA CLIENTE
	$fallaCliente = $_REQUEST['fallaCliente'];
	if (!empty($fallaCliente)) {
		if (strlen($fallaCliente)>160) {
			$errors [] = " </br>El campo, <strong>Falla de Cliente</strong> es mayor que 160 Caracteres.</br>";
		} 
	} else{
		$errors [] = "</br> El campo, <strong>Falla del Cliente</strong> esta vacio! </br>";
	}
	
	if (!empty($_REQUEST['seleccionCliente'])) {
		$consultaProductos = "INSERT INTO productos (articulo, fallaCliente, estadoEquipo, serial,idCliente , fechaIngreso, accesorios, codigo, horarioLlamada, instaladores ) 
							  VALUES
							  (
							  	'$articuloNuevo',
								'$fallaCliente',
								'$estadoEquipo',
								'$serial',
								'$_REQUEST[seleccionCliente]',
								'$_REQUEST[fechaIngreso]',
								'$accesorios',
								'$codigo',
								'$horarioLlamada',
								'$instaladores'
							  )";
		mysqli_query($conexion, $consultaProductos) or die ("Problemas -->".mysqli_error($conexion));
		$msj [] = "El Registro de Orden de Servicio se ha realizado Correctamente.";
		mysqli_close($conexion);
	}else{
		$errors [] = "Debe seleccionar un <strong>Cliente</strong>";
	}
	
	

	if (isset($msj)) {
	?>	
		<div class="alert alert-success" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span><strong>¡Bien hecho!</strong>
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
				<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span><strong> Error!!</strong> 
				<?php
					foreach ($errors as $error) {
						echo $error;
					}
				?>
			</div>
			<?php
			}
	
	 ?>
	

 