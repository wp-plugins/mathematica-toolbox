<?php
/**
 * Glyph replacement rules.
 *
 * @since   1.0.0
 *
 * @package  Mathematica_WP_Toolbox
 * @subpackage Mathematica_WP_Toolbox/admin
 */

/**
 * Defines glyph replacement rules.
 *
 * @package  Mathematica_WP_Toolbox
 * @subpackage Mathematica_WP_Toolbox/admin
 * @author   Calle Ekdahl <calle@ekdahl.email>
 */
 
class Mathematica_WP_Toolbox_Glyphs {
	
	/**
	 * List of glyph replacement rules.
	 *
	 * @since  1.0.0
	 * @access  static
	 * @var   array  $glyphs  List of glyph replacement rules
	 */
	static $glyphs = array(
			'\[Aleph]' => 'ℵ',
	        '\[Alpha]' => 'α',
	        '\[And]' => '∧',
	        '\[Angle]' => '∠',
	        '\[Angstrom]' => 'Å',
	        '\[AscendingEllipsis]' => '⋰',
	        '\[Backslash]' => '∖',
	        '\[BeamedEighthNote]' => '♫',
	        '\[BeamedSixteenthNote]' => '♬',
	        '\[Because]' => '∵',
	        '\[Bet]' => 'ℶ',
	        '\[Beta]' => 'β',
	        '\[Bullet]' => '•',
	        '\[CapitalAlpha]' => 'Α',
	        '\[CapitalBeta]' => 'Β',
	        '\[CapitalChi]' => 'Χ',
	        '\[CapitalDelta]' => 'Δ',
	        '\[CapitalDigamma]' => 'Ϝ',
	        '\[CapitalEpsilon]' => 'Ε',
	        '\[CapitalEta]' => 'Η',
	        '\[CapitalGamma]' => 'Γ',
	        '\[CapitalIota]' => 'Ι',
	        '\[CapitalKappa]' => 'Κ',
	        '\[CapitalKoppa]' => 'Ϟ',
	        '\[CapitalLambda]' => 'Λ',
	        '\[CapitalMu]' => 'Μ',
	        '\[CapitalNu]' => 'Ν',
	        '\[CapitalOmega]' => 'Ω',
	        '\[CapitalOmicron]' => 'Ο',
	        '\[CapitalPhi]' => 'Φ',
	        '\[CapitalPi]' => 'Π',
	        '\[CapitalPsi]' => 'Ψ',
	        '\[CapitalRho]' => 'Ρ',
	        '\[CapitalSampi]' => 'Ϡ',
	        '\[CapitalSigma]' => 'Σ',
	        '\[CapitalStigma]' => 'Ϛ',
	        '\[CapitalTau]' => 'Τ',
	        '\[CapitalTheta]' => 'Θ',
	        '\[CapitalUpsilon]' => 'Υ',
	        '\[CapitalXi]' => 'Ξ',
	        '\[CapitalZeta]' => 'Ζ',
	        '\[Cap]' => '⌢',
	        '\[CenterDot]' => '·',
	        '\[CenterEllipsis]' => '⋯',
	        '\[Checkmark]' => '✓',
	        '\[Chi]' => 'χ',
	        '\[CircleDot]' => '⊙',
	        '\[CircleMinus]' => '⊖',
	        '\[CirclePlus]' => '⊕',
	        '\[CircleTimes]' => '⊗',
	        '\[ClockwiseContourIntegral]' => '∲',
	        '\[CloseCurlyDoubleQuote]' => '”',
	        '\[CloseCurlyQuote]' => '’',
	        '\[CloverLeaf]' => '⌘',
	        '\[ClubSuit]' => '♣',
	        '\[Colon]' => '∶',
	        '\[Congruent]' => '≡',
	        '\[ContourIntegral]' => '∮',
	        '\[Coproduct]' => '∐',
	        '\[CounterClockwiseContourIntegral]' => '∳',
	        '\[CupCap]' => '≍',
	        '\[Cup]' => '⌣',
	        '\[CurlyCapitalUpsilon]' => 'ϒ',
	        '\[CurlyEpsilon]' => 'ε',
	        '\[CurlyKappa]' => 'ϰ',
	        '\[CurlyPhi]' => 'φ',
	        '\[CurlyPi]' => 'ϖ',
	        '\[CurlyRho]' => 'ϱ',
	        '\[CurlyTheta]' => 'ϑ',
	        '\[Dagger]' => '†',
	        '\[Dalet]' => 'ℸ',
	        '\[Dash]' => '–',
	        '\[Degree]' => '°',
	        '\[Del]' => '∇',
	        '\[Delta]' => 'δ',
	        '\[DescendingEllipsis]' => '⋱',
	        '\[Diameter]' => '⌀',
	        '\[Diamond]' => '⋄',
	        '\[DiamondSuit]' => '♢',
	        '\[Digamma]' => 'ϝ',
	        '\[Divide]' => '÷',
	        '\[DotEqual]' => '≐',
	        '\[DoubleContourIntegral]' => '∯',
	        '\[DoubleDagger]' => '‡',
	        '\[DoubleDownArrow]' => '⇓',
	        '\[DoubleLeftArrow]' => '⇐',
	        '\[DoubleLeftRightArrow]' => '⇔',
	        '\[DoubleLeftTee]' => '⫤',
	        '\[DoubleLongLeftArrow]' => '⟸',
	        '\[DoubleLongLeftRightArrow]' => '⟺',
	        '\[DoubleLongRightArrow]' => '⟹',
	        '\[DoublePrime]' => '″',
	        '\[DoubleRightArrow]' => '⇒',
	        '\[DoubleRightTee]' => '⊨',
	        '\[DoubleUpArrow]' => '⇑',
	        '\[DoubleUpDownArrow]' => '⇕',
	        '\[DoubleVerticalBar]' => '∥',
	        '\[DownArrowBar]' => '⤓',
	        '\[DownArrow]' => '↓',
	        '\[DownArrowUpArrow]' => '⇵',
	        '\[DownLeftRightVector]' => '⥐',
	        '\[DownLeftTeeVector]' => '⥞',
	        '\[DownLeftVector]' => '↽',
	        '\[DownLeftVectorBar]' => '⥖',
	        '\[DownPointer]' => '▾',
	        '\[DownRightTeeVector]' => '⥟',
	        '\[DownRightVector]' => '⇁',
	        '\[DownRightVectorBar]' => '⥗',
	        '\[DownTeeArrow]' => '↧',
	        '\[DownTee]' => '⊤',
	        '\[Earth]' => '♁',
	        '\[EighthNote]' => '♪',
	        '\[Element]' => '∈',
	        '\[Ellipsis]' => '…',
	        '\[EmptyCircle]' => '○',
	        '\[EmptyDiamond]' => '◇',
	        '\[EmptyDownTriangle]' => '▽',
	        '\[EmptyRectangle]' => '▯',
	        '\[EmptySet]' => '∅',
	        '\[EmptySmallCircle]' => '◦',
	        '\[EmptySmallSquare]' => '◻',
	        '\[EmptySquare]' => '□',
	        '\[EmptyUpTriangle]' => '△',
	        '\[EmptyVerySmallSquare]' => '▫',
	        '\[Epsilon]' => 'ϵ',
	        '\[EqualTilde]' => '≂',
	        '\[Equilibrium]' => '⇌',
	        '\[Equivalent]' => '⧦',
	        '\[Eta]' => 'η',
	        '\[Euro]' => '€',
	        '\[Exists]' => '∃',
	        '\[FilledCircle]' => '●',
	        '\[FilledDiamond]' => '◆',
	        '\[FilledDownTriangle]' => '▼',
	        '\[FilledLeftTriangle]' => '◀',
	        '\[FilledRectangle]' => '▮',
	        '\[FilledRightTriangle]' => '▶',
	        '\[FilledSmallSquare]' => '◼',
	        '\[FilledSquare]' => '■',
	        '\[FilledUpTriangle]' => '▲',
	        '\[FilledVerySmallSquare]' => '▪',
	        '\[FinalSigma]' => 'ς',
	        '\[FivePointedStar]' => '★',
	        '\[Flat]' => '♭',
	        '\[ForAll]' => '∀',
	        '\[Gamma]' => 'γ',
	        '\[Gimel]' => 'ℷ',
	        '\[GothicCapitalC]' => 'ℭ',
	        '\[GothicCapitalH]' => 'ℌ',
	        '\[GothicCapitalI]' => 'ℑ',
	        '\[GothicCapitalR]' => 'ℜ',
	        '\[GothicCapitalZ]' => 'ℨ',
	        '\[GreaterEqualLess]' => '⋛',
	        '\[GreaterEqual]' => '≥',
	        '\[GreaterFullEqual]' => '≧',
	        '\[GreaterGreater]' => '≫',
	        '\[GreaterLess]' => '≷',
	        '\[GreaterSlantEqual]' => '⩾',
	        '\[GreaterTilde]' => '≳',
	        '\[HappySmiley]' => '☺',
	        '\[HBar]' => 'ℏ',
	        '\[HeartSuit]' => '♡',
	        '\[HorizontalLine]' => '─',
	        '\[HumpDownHump]' => '≎',
	        '\[HumpEqual]' => '≏',
	        '\[Hyphen]' => '‐',
	        '\[Infinity]' => '∞',
	        '\[Integral]' => '∫',
	        '\[Intersection]' => '⋂',
	        '\[Iota]' => 'ι',
	        '\[Jupiter]' => '♃',
	        '\[Kappa]' => 'κ',
	        '\[Koppa]' => 'ϟ',
	        '\[Lambda]' => 'λ',
	        '\[LeftAngleBracket]' => '〈',
	        '\[LeftArrowBar]' => '⇤',
	        '\[LeftArrow]' => '←',
	        '\[LeftArrowRightArrow]' => '⇆',
	        '\[LeftCeiling]' => '⌈',
	        '\[LeftDoubleBracket]' => '〚',
	        '\[LeftDownTeeVector]' => '⥡',
	        '\[LeftDownVectorBar]' => '⥙',
	        '\[LeftDownVector]' => '⇃',
	        '\[LeftFloor]' => '⌊',
	        '\[LeftPointer]' => '◂',
	        '\[LeftRightArrow]' => '↔',
	        '\[LeftRightVector]' => '⥎',
	        '\[LeftTee]' => '⊣',
	        '\[LeftTeeArrow]' => '↤',
	        '\[LeftTeeVector]' => '⥚',
	        '\[LeftTriangle]' => '⊲',
	        '\[LeftTriangleBar]' => '⧏',
	        '\[LeftTriangleEqual]' => '⊴',
	        '\[LeftUpDownVector]' => '⥑',
	        '\[LeftUpTeeVector]' => '⥠',
	        '\[LeftUpVector]' => '↿',
	        '\[LeftUpVectorBar]' => '⥘',
	        '\[LeftVector]' => '↼',
	        '\[LeftVectorBar]' => '⥒',
	        '\[LessEqual]' => '≤',
	        '\[LessEqualGreater]' => '⋚',
	        '\[LessFullEqual]' => '≦',
	        '\[LessGreater]' => '≶',
	        '\[LessLess]' => '≪',
	        '\[LessSlantEqual]' => '⩽',
	        '\[LessTilde]' => '≲',
	        '\[LongDash]' => '—',
	        '\[LongLeftArrow]' => '⟵',
	        '\[LongLeftRightArrow]' => '⟷',
	        '\[LongRightArrow]' => '⟶',
	        '\[LowerLeftArrow]' => '↙',
	        '\[LowerRightArrow]' => '↘',
	        '\[Mars]' => '♂',
	        '\[MeasuredAngle]' => '∡',
	        '\[Mercury]' => '☿',
	        '\[Mho]' => '℧',
	        '\[Micro]' => 'µ',
	        '\[MinusPlus]' => '∓',
	        '\[Mu]' => 'μ',
	        '\[Nand]' => '⊼',
	        '\[Natural]' => '♮',
	        '\[Neptune]' => '♆',
	        '\[NestedGreaterGreater]' => '⪢',
	        '\[NestedLessLess]' => '⪡',
	        '\[Nor]' => '⊽',
	        '\[NotCongruent]' => '≢',
	        '\[NotCupCap]' => '≭',
	        '\[NotDoubleVerticalBar]' => '∦',
	        '\[NotElement]' => '∉',
	        '\[NotEqual]' => '≠',
	        '\[NotExists]' => '∄',
	        '\[NotGreater]' => '≯',
	        '\[NotGreaterEqual]' => '≱',
	        '\[NotGreaterFullEqual]' => '≩',
	        '\[NotGreaterLess]' => '≹',
	        '\[NotGreaterTilde]' => '≵',
	        '\[NotLeftTriangle]' => '⋪',
	        '\[NotLeftTriangleEqual]' => '⋬',
	        '\[NotLessEqual]' => '≰',
	        '\[NotLessFullEqual]' => '≨',
	        '\[NotLessGreater]' => '≸',
	        '\[NotLess]' => '≮',
	        '\[NotLessTilde]' => '≴',
	        '\[Not]' => '¬',
	        '\[NotPrecedes]' => '⊀',
	        '\[NotPrecedesSlantEqual]' => '⋠',
	        '\[NotPrecedesTilde]' => '⋨',
	        '\[NotReverseElement]' => '∌',
	        '\[NotRightTriangle]' => '⋫',
	        '\[NotRightTriangleEqual]' => '⋭',
	        '\[NotSquareSubsetEqual]' => '⋢',
	        '\[NotSquareSupersetEqual]' => '⋣',
	        '\[NotSubset]' => '⊄',
	        '\[NotSubsetEqual]' => '⊈',
	        '\[NotSucceeds]' => '⊁',
	        '\[NotSucceedsSlantEqual]' => '⋡',
	        '\[NotSucceedsTilde]' => '⋩',
	        '\[NotSuperset]' => '⊅',
	        '\[NotSupersetEqual]' => '⊉',
	        '\[NotTilde]' => '≁',
	        '\[NotTildeEqual]' => '≄',
	        '\[NotTildeFullEqual]' => '≇',
	        '\[NotTildeTilde]' => '≉',
	        '\[Nu]' => 'ν',
	        '\[Omega]' => 'ω',
	        '\[Omicron]' => 'ο',
	        '\[OpenCurlyDoubleQuote]' => '“',
	        '\[OpenCurlyQuote]' => '‘',
	        '\[Or]' => '∨',
	        '\[OverBracket]' => '⎴',
	        '\[Paragraph]' => '¶',
	        '\[PartialD]' => '∂',
	        '\[Phi]' => 'ϕ',
	        '\[Pi]' => 'π',
	        '\[PlusMinus]' => '±',
	        '\[Pluto]' => '♇',
	        '\[Precedes]' => '≺',
	        '\[PrecedesEqual]' => '⪯',
	        '\[PrecedesSlantEqual]' => '≼',
	        '\[PrecedesTilde]' => '≾',
	        '\[Prime]' => '′',
	        '\[Product]' => '∏',
	        '\[Proportion]' => '∷',
	        '\[Proportional]' => '∝',
	        '\[Psi]' => 'ψ',
	        '\[QuarterNote]' => '♩',
	        '\[ReturnIndicator]' => '↵',
	        '\[ReverseDoublePrime]' => '‶',
	        '\[ReverseElement]' => '∋',
	        '\[ReverseEquilibrium]' => '⇋',
	        '\[ReversePrime]' => '‵',
	        '\[ReverseUpEquilibrium]' => '⥯',
	        '\[Rho]' => 'ρ',
	        '\[RightAngle]' => '∟',
	        '\[RightAngleBracket]' => '〉',
	        '\[RightArrow]' => '→',
	        '\[RightArrowBar]' => '⇥',
	        '\[RightArrowLeftArrow]' => '⇄',
	        '\[RightCeiling]' => '⌉',
	        '\[RightDoubleBracket]' => '〛',
	        '\[RightDownTeeVector]' => '⥝',
	        '\[RightDownVector]' => '⇂',
	        '\[RightDownVectorBar]' => '⥕',
	        '\[RightFloor]' => '⌋',
	        '\[RightPointer]' => '▸',
	        '\[RightTee]' => '⊢',
	        '\[RightTeeArrow]' => '↦',
	        '\[RightTeeVector]' => '⥛',
	        '\[RightTriangle]' => '⊳',
	        '\[RightTriangleBar]' => '⧐',
	        '\[RightTriangleEqual]' => '⊵',
	        '\[RightUpDownVector]' => '⥏',
	        '\[RightUpTeeVector]' => '⥜',
	        '\[RightUpVector]' => '↾',
	        '\[RightUpVectorBar]' => '⥔',
	        '\[RightVector]' => '⇀',
	        '\[RightVectorBar]' => '⥓',
	        '\[RoundImplies]' => '⥰',
	        '\[SadSmiley]' => '☹',
	        '\[Sampi]' => 'ϡ',
	        '\[Saturn]' => '♄',
	        '\[ScriptCapitalB]' => 'ℬ',
	        '\[ScriptCapitalE]' => 'ℰ',
	        '\[ScriptCapitalF]' => 'ℱ',
	        '\[ScriptCapitalH]' => 'ℋ',
	        '\[ScriptCapitalI]' => 'ℐ',
	        '\[ScriptCapitalL]' => 'ℒ',
	        '\[ScriptCapitalM]' => 'ℳ',
	        '\[ScriptCapitalR]' => 'ℛ',
	        '\[ScriptE]' => 'ℯ',
	        '\[ScriptG]' => 'ℊ',
	        '\[ScriptL]' => 'ℓ',
	        '\[ScriptO]' => 'ℴ',
	        '\[Sharp]' => '♯',
	        '\[Sigma]' => 'σ',
	        '\[SixPointedStar]' => '✶',
	        '\[SkeletonIndicator]' => '⁃',
	        '\[SmallCircle]' => '∘',
	        '\[SpaceIndicator]' => '␣',
	        '\[SpadeSuit]' => '♠',
	        '\[SphericalAngle]' => '∢',
	        '\[Sqrt]' => '√',
	        '\[SquareIntersection]' => '⊓',
	        '\[SquareSubset]' => '⊏',
	        '\[SquareSubsetEqual]' => '⊑',
	        '\[SquareSuperset]' => '⊐',
	        '\[SquareSupersetEqual]' => '⊒',
	        '\[SquareUnion]' => '⊔',
	        '\[Star]' => '⋆',
	        '\[Stigma]' => 'ϛ',
	        '\[Subset]' => '⊂',
	        '\[SubsetEqual]' => '⊆',
	        '\[Succeeds]' => '≻',
	        '\[SucceedsEqual]' => '⪰',
	        '\[SucceedsSlantEqual]' => '≽',
	        '\[SucceedsTilde]' => '≿',
	        '\[SuchThat]' => '∍',
	        '\[Sum]' => '∑',
	        '\[Superset]' => '⊃',
	        '\[SupersetEqual]' => '⊇',
	        '\[Tau]' => 'τ',
	        '\[Therefore]' => '∴',
	        '\[Theta]' => 'θ',
	        '\[Tilde]' => '∼',
	        '\[TildeEqual]' => '≃',
	        '\[TildeFullEqual]' => '≅',
	        '\[TildeTilde]' => '≈',
	        '\[Times]' => '×',
	        '\[Trademark]' => '™',
	        '\[UnderBracket]' => '⎵',
	        '\[Union]' => '⋃',
	        '\[UnionPlus]' => '⊎',
	        '\[UpArrow]' => '↑',
	        '\[UpArrowBar]' => '⤒',
	        '\[UpArrowDownArrow]' => '⇅',
	        '\[UpDownArrow]' => '↕',
	        '\[UpEquilibrium]' => '⥮',
	        '\[UpperLeftArrow]' => '↖',
	        '\[UpperRightArrow]' => '↗',
	        '\[UpPointer]' => '▴',
	        '\[Upsilon]' => 'υ',
	        '\[UpTee]' => '⊥',
	        '\[UpTeeArrow]' => '↥',
	        '\[Uranus]' => '♅',
	        '\[Vee]' => '⋁',
	        '\[Venus]' => '♀',
	        '\[VerticalEllipsis]' => '⋮',
	        '\[VerticalLine]' => '│',
	        '\[VerticalTilde]' => '≀',
	        '\[WatchIcon]' => '⌚',
	        '\[Wedge]' => '⋀',
	        '\[WeierstrassP]' => '℘',
	        '\[Xi]' => 'ξ',
	        '\[Xor]' => '⊻',
	        '\[Zeta]' => 'ζ'
		);
		
}