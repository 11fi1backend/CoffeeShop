<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE localizing PUBLIC "localizing" "DailyCustomerQuantities.dtd">
<xsl:stylesheet version="1.0" xmlns:fo="http://www.w3.org/1999/XSL/Format" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
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
					<fo:block-container position="absolute" left="1.9cm" top="4cm" height="1cm" width="15cm">
						<fo:block color="#70706f"> Klara-Oppenheimer-Schule &#8226; Stettiner Straße 1 &#8226; 97072 W&#252;rzburg </fo:block>
					</fo:block-container>
					<!-- ende anschrift -->
					<fo:block-container position="absolute" left="1.9cm" width="6cm" top="5.5cm" height="3.5cm" font-size="10pt">
						<fo:block>%Lehrername%</fo:block>
					</fo:block-container>
					<!-- ende empfadresse -->

					<!-- Rechnungsblock + Ueberschrift -->
					<fo:block-container position="absolute" left="11.4cm" width="8.3cm" top="5cm" height="2cm">
						<fo:table table-layout="fixed" width="100%">
							<fo:table-column column-width="33%"/>
							<fo:table-column column-width="33%"/>
							<fo:table-column column-width="33%"/>
							<fo:table-body>
								<fo:table-row>
									<fo:table-cell>
										<fo:block/>
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
										<fo:block> Konsumenten_ID: </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block font-weight="bold"> %Konsumenten_ID% </fo:block>
									</fo:table-cell>
								</fo:table-row>
								<fo:table-row>
									<fo:table-cell>
										<fo:block> Rechnungs_ID: </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block font-weight="bold"> %Rechnungs_ID% </fo:block>
									</fo:table-cell>
								</fo:table-row>
								<fo:table-row>
									<fo:table-cell>
										<fo:block> Auftrags_ID: </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block font-weight="bold"> %Auftrags_ID% </fo:block>
									</fo:table-cell>
								</fo:table-row>
								<fo:table-row>
									<fo:table-cell>
										<fo:block> Auftragsdatum: </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block font-weight="bold"> %Auftragsdatum% </fo:block>
									</fo:table-cell>
								</fo:table-row>
							</fo:table-body>
						</fo:table>
					</fo:block-container>
					<!-- /info block -->
					<!-- pos block -->
					<fo:block-container position="absolute" left="1.9cm" width="17.8cm" top="10cm" height="14cm" border-width="thin">
						<fo:table table-layout="fixed" width="100%">
							<fo:table-column column-width="25%"/>
							<fo:table-column column-width="25%"/>
							<fo:table-column column-width="25%"/>
							<fo:table-column column-width="25%"/>
							<fo:table-header>
								<fo:table-row background-color="#DDDDDD" font-weight="bold" border-style="solid" border-width="thin" font-size="12">
									<fo:table-cell>
										<fo:block text-align="left"> Artikelnr. </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block text-align="left"> Bezeichnung </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block text-align="left"> Menge </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block text-align="left"> Rechnungspreis </fo:block>
									</fo:table-cell>
								</fo:table-row>
							</fo:table-header>
							<fo:table-body>
								<fo:table-row>
									<fo:table-cell number-columns-spanned="4">
										<fo:block text-align="center"> &#160; </fo:block>
									</fo:table-cell>
								</fo:table-row>
								<fo:table-row>
									<fo:table-cell>
										<fo:block text-align="left"> %Artikelnr% </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block text-align="left"> %Bezeichnung% </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block text-align="left"> %Menge% </fo:block>
									</fo:table-cell>
									<fo:table-cell>
										<fo:block text-align="left"> %Rechnungspreis% </fo:block>
									</fo:table-cell>
								</fo:table-row>
							</fo:table-body>
						</fo:table>
					</fo:block-container>

					<!-- foot -->
					<fo:block-container position="absolute" left="1.9cm" width="17.8cm" top="23cm" height="2.0cm" font-size="10pt" text-align="right"
						border-top-style="solid" border-width="thin">
						<fo:table table-layout="fixed" width="100%">
							<fo:table-column column-width="100%"/>
							<fo:table-body>
								<fo:table-row>
									<fo:table-cell>
										<fo:block font-weight="bold" text-align="left"> Ansprechpartner </fo:block>
									</fo:table-cell>
								</fo:table-row>
								<fo:table-row>
									<fo:table-cell>
										<fo:block text-align="left"> Karl Steinam </fo:block>
									</fo:table-cell>
								</fo:table-row>
								<fo:table-row>
									<fo:table-cell>
										<fo:block text-align="left"> Stettiner Straße 1 </fo:block>
									</fo:table-cell>
								</fo:table-row>
								<fo:table-row>
									<fo:table-cell>
										<fo:block text-align="left"> 97072 Würzburg</fo:block>
									</fo:table-cell>
								</fo:table-row>
							</fo:table-body>
						</fo:table>
					</fo:block-container>
					<!-- ende foot -->
				</fo:flow>
			</fo:page-sequence>
		</fo:root>
	</xsl:template>
</xsl:stylesheet>
