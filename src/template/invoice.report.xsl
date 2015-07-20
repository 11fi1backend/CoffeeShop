<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE localizing PUBLIC "localizing" "DailyCustomerQuantities.dtd">
<xsl:stylesheet version="1.0" xmlns:fo="http://www.w3.org/1999/XSL/Format" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:import href="../../ch.minova.report/src/ch/minova/report/xsl/date-time.xsl"/>
	<xsl:decimal-format NaN="" decimal-separator="&decimal-separator;" grouping-separator="&grouping-separator;" name="de"/>
	<xsl:template match="DailyCustomerQuantities">
		<fo:root xmlns:fo="http://www.w3.org/1999/XSL/Format">
			<fo:layout-master-set>
				<fo:simple-page-master master-name="first" page-height="29.7cm" page-width="21cm" margin-top="0cm" margin-bottom="0cm" margin-left="0cm"
					margin-right="0cm">
					<fo:region-body margin-top="0cm"/>
					<fo:region-before extent="0cm"/>
					<fo:region-after extent="0cm"/>
				</fo:simple-page-master>
			</fo:layout-master-set>

			<!-- starts actual layout -->
			<fo:page-sequence master-reference="first">

				<fo:flow flow-name="xsl-region-body">
					<!-- Anschrift -->
					<fo:block-container position="absolute" left="1.9cm" top="5cm" height="1cm" width="10cm">
						<fo:block color="#70706f"> Klara-Oppenheimer-Schule &#8226; Stettiner Straße 1 &#8226; 97072 W&#252;rzburg </fo:block>
					</fo:block-container>
					<!-- ende anschrift -->
					<fo:block-container position="absolute" left="1.9cm" width="6cm" top="5.5cm" height="3.5cm" font-size="10pt">
						<fo:block>Lehrername</fo:block>
						<fo:block>Straße</fo:block>
						<fo:block>PLZ, Ort</fo:block>
					</fo:block-container>
					<!-- ende empfadresse -->

					<!-- Rechnungsblock + Ueberschrift -->
					<fo:block-container position="absolute" left="11.4cm" width="8.3cm" top="5cm" height="2cm">
						<fo:table table-layout="fixed" width="100%">
							<fo:table-column column-width="33%"/>
							<fo:table-column column-width="33%"/>
							<fo:table-column column-width="33%"/>
							<fo:table-body>
								<fo:table-row border-bottom-style="solid" border-width="thin">
									<fo:table-cell number-columns-spanned="3">
										<fo:block font-size="10pt" text-align="center" font-weight="bold" letter-spacing="1pt"> </fo:block>
									</fo:table-cell>
								</fo:table-row>
								<fo:table-row font-size="10pt" text-align="center" background-color="#DDDDDD" border-width="thin" border-right-style="solid"
									border-left-style="solid">
									<fo:table-cell border-right-style="solid" border-width="thin">
										<fo:block> Rechnung </fo:block>
									</fo:table-cell>
									<fo:table-cell border-right-style="solid" border-width="thin">
										<fo:block> Datum </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block> Kundennr. </fo:block>
									</fo:table-cell>
								</fo:table-row>
								<fo:table-row font-size="11pt" text-align="center" font-weight="bold" background-color="#DDDDDD" border-bottom-style="solid"
									border-right-style="solid" border-left-style="solid" border-width="thin">
									<fo:table-cell border-right-style="solid" border-width="thin">
										<fo:block> Rech-NR </fo:block>
									</fo:table-cell>
									<fo:table-cell border-right-style="solid" border-width="thin">
										<fo:block> DATUM </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block> KDNR </fo:block>
									</fo:table-cell>
								</fo:table-row>
							</fo:table-body>
						</fo:table>
					</fo:block-container>
					<!-- /Rechnungsblock -->

					<!-- info block -->
					<fo:block-container position="absolute" left="11.4cm" width="6cm" top="6.9cm" height="4.5cm" font-size="10pt">
						<fo:table table-layout="fixed" width="100%">
							<fo:table-column column-width="50%"/>
							<fo:table-column column-width="50%"/>
							<fo:table-body>
								<fo:table-row>
									<fo:table-cell>
										<fo:block> Auftragsnr.: </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block font-weight="bold"> #rk04@ </fo:block>
									</fo:table-cell>
								</fo:table-row>
								<fo:table-row>
									<fo:table-cell>
										<fo:block> Auftragsdatum: </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block font-weight="bold"> #rk09@ </fo:block>
									</fo:table-cell>
								</fo:table-row>
								<fo:table-row>
									<fo:table-cell>
										<fo:block> Ihr Auftrag: </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block font-weight="bold"> #rk06@ </fo:block>
									</fo:table-cell>
								</fo:table-row>
								<fo:table-row>
									<fo:table-cell>
										<fo:block> Lieferdatum: </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block font-weight="bold"> #rk17@ </fo:block>
									</fo:table-cell>
								</fo:table-row>
								<fo:table-row>
									<fo:table-cell>
										<fo:block> Lieferscheinnr.: </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block font-weight="bold"> #rk16@ </fo:block>
									</fo:table-cell>
								</fo:table-row>
								<fo:table-row>
									<fo:table-cell>
										<fo:block> Referenznr: </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block font-weight="bold"> #rk30@ </fo:block>
									</fo:table-cell>
								</fo:table-row>
								<fo:table-row>
									<fo:table-cell>
										<fo:block> Seite: </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block font-weight="bold"> #0001@#seit@ </fo:block>
									</fo:table-cell>
								</fo:table-row>
							</fo:table-body>
						</fo:table>
					</fo:block-container>
					<!-- /info block -->

					<!-- IZeichen block -->
					<fo:block-container position="absolute" left="1.9cm" width="8cm" top="9cm" height="0.5cm">
						<fo:block font-size="10pt"> Bestell-Nr.: #rk40@ </fo:block>
						<fo:block font-size="10pt"> Zust&#228;ndig f&#252;r Sie: #m101@ </fo:block>
					</fo:block-container>
					<!-- /IZeichen block -->

					<!-- pos block -->
					<fo:block-container position="absolute" left="1.9cm" width="17.8cm" top="10cm" height="14cm" border-width="thin">
						<fo:table table-layout="fixed" width="100%">
							<fo:table-column column-width="6%"/>
							<fo:table-column column-width="12%"/>
							<fo:table-column column-width="44%"/>
							<fo:table-column column-width="4%"/>
							<fo:table-column column-width="8%"/>
							<fo:table-column column-width="11%"/>
							<fo:table-column column-width="15%"/>
							<fo:table-header>
								<fo:table-row background-color="#DDDDDD" font-weight="bold" border-style="solid" border-width="thin">
									<fo:table-cell>
										<fo:block text-align="center"> Pos. </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block> Artikelnr. </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block> Bezeichnung </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block text-align="right"> ME </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block text-align="right"> Menge </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block text-align="right"> E-Preis </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block text-align="right" margin-right="2px"> G-Preis </fo:block>
									</fo:table-cell>
								</fo:table-row>
							</fo:table-header>
							<fo:table-body>
								<fo:table-row>
									<fo:table-cell number-columns-spanned="7">
										<fo:block text-align="center"> &#160; </fo:block>
									</fo:table-cell>
								</fo:table-row>
								<fo:table-row>
									<fo:table-cell>
										<fo:block text-align="center"> #fo04@ </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block> #fo01@ </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block> #fo05@ </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block text-align="right"> #fo19@ </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block text-align="right"> #fo06@ </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block text-align="right"> #fo08@ </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block text-align="right" margin-right="2px"> #fo10@ </fo:block>
									</fo:table-cell>
								</fo:table-row>
							</fo:table-body>
						</fo:table>
					</fo:block-container>

					<!-- foot -->
					<fo:block-container position="absolute" left="1.9cm" width="17.8cm" top="23cm" height="2.0cm" font-size="10pt" text-align="right"
						border-top-style="solid" border-width="thin">
						<fo:table table-layout="fixed" width="100%">
							<fo:table-column column-width="20%"/>
							<fo:table-column column-width="16%"/>
							<fo:table-column column-width="20%"/>
							<fo:table-column column-width="10%"/>
							<fo:table-column column-width="14%"/>
							<fo:table-column column-width="20%"/>
							<fo:table-body>
								<fo:table-row>
									<fo:table-cell>
										<fo:block> Nettowarenwert </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block> Nebenkosten </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block> Zwischensumme </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block> Mwst % </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block> Mwst (&#8364;) </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block font-weight="bold"> Rechnungswert </fo:block>
									</fo:table-cell>
								</fo:table-row>
								<fo:table-row>
									<fo:table-cell>
										<fo:block> #0003@ &#8364; </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block> #rk08@ </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block> #0005@ &#8364; </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block> #0007@ </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block> #0009@ </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block font-weight="bold"> #0011@ &#8364; </fo:block>
									</fo:table-cell>
								</fo:table-row>
								<fo:table-row>
									<fo:table-cell>
										<fo:block> #0004@ &#8364; </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block> #rk08@ </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block> #0006@ &#8364; </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block> #0008@ </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block> #0010@ </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block font-weight="bold"> #0012@ &#8364; </fo:block>
									</fo:table-cell>
								</fo:table-row>
							</fo:table-body>
						</fo:table>
					</fo:block-container>
					<!-- ende foot -->

					<!-- Zahlungsbedingung block -->
					<fo:block-container position="absolute" left="1.9cm" width="16cm" top="24.5cm" height="2cm" font-size="10pt">
						<fo:table table-layout="fixed" width="100%">
							<fo:table-column column-width="4cm"/>
							<fo:table-column column-width="10cm"/>
							<fo:table-body>
								<fo:table-row>
									<fo:table-cell>
										<fo:block font-weight="bold"> Zahlungsbedingung: </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block> #zb03@ #0021@ #zb07@ </fo:block>
									</fo:table-cell>
								</fo:table-row>
							</fo:table-body>
						</fo:table>
					</fo:block-container>
					<!-- /Zahlungsbedingung block -->
				</fo:flow>
			</fo:page-sequence>
		</fo:root>
	</xsl:template>
</xsl:stylesheet>
