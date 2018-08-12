<?php

namespace ChangeCase;

final class Regex
{
    public const CAMEL_CASE = "/([a-z\u{00B5}\u{00DF}-\u{00F6}\u{00F8}-\u{00FF}\u{0101}\u{0103}\u{0105}\u{0107}\u{0109}\u{010B}\u{010D}\u{010F}\u{0111}\u{0113}\u{0115}\u{0117}\u{0119}\u{011B}\u{011D}\u{011F}\u{0121}\u{0123}\u{0125}\u{0127}\u{0129}\u{012B}\u{012D}\u{012F}\u{0131}\u{0133}\u{0135}\u{0137}\u{0138}\u{013A}\u{013C}\u{013E}\u{0140}\u{0142}\u{0144}\u{0146}\u{0148}\u{0149}\u{014B}\u{014D}\u{014F}\u{0151}\u{0153}\u{0155}\u{0157}\u{0159}\u{015B}\u{015D}\u{015F}\u{0161}\u{0163}\u{0165}\u{0167}\u{0169}\u{016B}\u{016D}\u{016F}\u{0171}\u{0173}\u{0175}\u{0177}\u{017A}\u{017C}\u{017E}-\u{0180}\u{0183}\u{0185}\u{0188}\u{018C}\u{018D}\u{0192}\u{0195}\u{0199}-\u{019B}\u{019E}\u{01A1}\u{01A3}\u{01A5}\u{01A8}\u{01AA}\u{01AB}\u{01AD}\u{01B0}\u{01B4}\u{01B6}\u{01B9}\u{01BA}\u{01BD}-\u{01BF}\u{01C6}\u{01C9}\u{01CC}\u{01CE}\u{01D0}\u{01D2}\u{01D4}\u{01D6}\u{01D8}\u{01DA}\u{01DC}\u{01DD}\u{01DF}\u{01E1}\u{01E3}\u{01E5}\u{01E7}\u{01E9}\u{01EB}\u{01ED}\u{01EF}\u{01F0}\u{01F3}\u{01F5}\u{01F9}\u{01FB}\u{01FD}\u{01FF}\u{0201}\u{0203}\u{0205}\u{0207}\u{0209}\u{020B}\u{020D}\u{020F}\u{0211}\u{0213}\u{0215}\u{0217}\u{0219}\u{021B}\u{021D}\u{021F}\u{0221}\u{0223}\u{0225}\u{0227}\u{0229}\u{022B}\u{022D}\u{022F}\u{0231}\u{0233}-\u{0239}\u{023C}\u{023F}\u{0240}\u{0242}\u{0247}\u{0249}\u{024B}\u{024D}\u{024F}-\u{0293}\u{0295}-\u{02AF}\u{0371}\u{0373}\u{0377}\u{037B}-\u{037D}\u{0390}\u{03AC}-\u{03CE}\u{03D0}\u{03D1}\u{03D5}-\u{03D7}\u{03D9}\u{03DB}\u{03DD}\u{03DF}\u{03E1}\u{03E3}\u{03E5}\u{03E7}\u{03E9}\u{03EB}\u{03ED}\u{03EF}-\u{03F3}\u{03F5}\u{03F8}\u{03FB}\u{03FC}\u{0430}-\u{045F}\u{0461}\u{0463}\u{0465}\u{0467}\u{0469}\u{046B}\u{046D}\u{046F}\u{0471}\u{0473}\u{0475}\u{0477}\u{0479}\u{047B}\u{047D}\u{047F}\u{0481}\u{048B}\u{048D}\u{048F}\u{0491}\u{0493}\u{0495}\u{0497}\u{0499}\u{049B}\u{049D}\u{049F}\u{04A1}\u{04A3}\u{04A5}\u{04A7}\u{04A9}\u{04AB}\u{04AD}\u{04AF}\u{04B1}\u{04B3}\u{04B5}\u{04B7}\u{04B9}\u{04BB}\u{04BD}\u{04BF}\u{04C2}\u{04C4}\u{04C6}\u{04C8}\u{04CA}\u{04CC}\u{04CE}\u{04CF}\u{04D1}\u{04D3}\u{04D5}\u{04D7}\u{04D9}\u{04DB}\u{04DD}\u{04DF}\u{04E1}\u{04E3}\u{04E5}\u{04E7}\u{04E9}\u{04EB}\u{04ED}\u{04EF}\u{04F1}\u{04F3}\u{04F5}\u{04F7}\u{04F9}\u{04FB}\u{04FD}\u{04FF}\u{0501}\u{0503}\u{0505}\u{0507}\u{0509}\u{050B}\u{050D}\u{050F}\u{0511}\u{0513}\u{0515}\u{0517}\u{0519}\u{051B}\u{051D}\u{051F}\u{0521}\u{0523}\u{0525}\u{0527}\u{0529}\u{052B}\u{052D}\u{052F}\u{0561}-\u{0587}\u{13F8}-\u{13FD}\u{1D00}-\u{1D2B}\u{1D6B}-\u{1D77}\u{1D79}-\u{1D9A}\u{1E01}\u{1E03}\u{1E05}\u{1E07}\u{1E09}\u{1E0B}\u{1E0D}\u{1E0F}\u{1E11}\u{1E13}\u{1E15}\u{1E17}\u{1E19}\u{1E1B}\u{1E1D}\u{1E1F}\u{1E21}\u{1E23}\u{1E25}\u{1E27}\u{1E29}\u{1E2B}\u{1E2D}\u{1E2F}\u{1E31}\u{1E33}\u{1E35}\u{1E37}\u{1E39}\u{1E3B}\u{1E3D}\u{1E3F}\u{1E41}\u{1E43}\u{1E45}\u{1E47}\u{1E49}\u{1E4B}\u{1E4D}\u{1E4F}\u{1E51}\u{1E53}\u{1E55}\u{1E57}\u{1E59}\u{1E5B}\u{1E5D}\u{1E5F}\u{1E61}\u{1E63}\u{1E65}\u{1E67}\u{1E69}\u{1E6B}\u{1E6D}\u{1E6F}\u{1E71}\u{1E73}\u{1E75}\u{1E77}\u{1E79}\u{1E7B}\u{1E7D}\u{1E7F}\u{1E81}\u{1E83}\u{1E85}\u{1E87}\u{1E89}\u{1E8B}\u{1E8D}\u{1E8F}\u{1E91}\u{1E93}\u{1E95}-\u{1E9D}\u{1E9F}\u{1EA1}\u{1EA3}\u{1EA5}\u{1EA7}\u{1EA9}\u{1EAB}\u{1EAD}\u{1EAF}\u{1EB1}\u{1EB3}\u{1EB5}\u{1EB7}\u{1EB9}\u{1EBB}\u{1EBD}\u{1EBF}\u{1EC1}\u{1EC3}\u{1EC5}\u{1EC7}\u{1EC9}\u{1ECB}\u{1ECD}\u{1ECF}\u{1ED1}\u{1ED3}\u{1ED5}\u{1ED7}\u{1ED9}\u{1EDB}\u{1EDD}\u{1EDF}\u{1EE1}\u{1EE3}\u{1EE5}\u{1EE7}\u{1EE9}\u{1EEB}\u{1EED}\u{1EEF}\u{1EF1}\u{1EF3}\u{1EF5}\u{1EF7}\u{1EF9}\u{1EFB}\u{1EFD}\u{1EFF}-\u{1F07}\u{1F10}-\u{1F15}\u{1F20}-\u{1F27}\u{1F30}-\u{1F37}\u{1F40}-\u{1F45}\u{1F50}-\u{1F57}\u{1F60}-\u{1F67}\u{1F70}-\u{1F7D}\u{1F80}-\u{1F87}\u{1F90}-\u{1F97}\u{1FA0}-\u{1FA7}\u{1FB0}-\u{1FB4}\u{1FB6}\u{1FB7}\u{1FBE}\u{1FC2}-\u{1FC4}\u{1FC6}\u{1FC7}\u{1FD0}-\u{1FD3}\u{1FD6}\u{1FD7}\u{1FE0}-\u{1FE7}\u{1FF2}-\u{1FF4}\u{1FF6}\u{1FF7}\u{210A}\u{210E}\u{210F}\u{2113}\u{212F}\u{2134}\u{2139}\u{213C}\u{213D}\u{2146}-\u{2149}\u{214E}\u{2184}\u{2C30}-\u{2C5E}\u{2C61}\u{2C65}\u{2C66}\u{2C68}\u{2C6A}\u{2C6C}\u{2C71}\u{2C73}\u{2C74}\u{2C76}-\u{2C7B}\u{2C81}\u{2C83}\u{2C85}\u{2C87}\u{2C89}\u{2C8B}\u{2C8D}\u{2C8F}\u{2C91}\u{2C93}\u{2C95}\u{2C97}\u{2C99}\u{2C9B}\u{2C9D}\u{2C9F}\u{2CA1}\u{2CA3}\u{2CA5}\u{2CA7}\u{2CA9}\u{2CAB}\u{2CAD}\u{2CAF}\u{2CB1}\u{2CB3}\u{2CB5}\u{2CB7}\u{2CB9}\u{2CBB}\u{2CBD}\u{2CBF}\u{2CC1}\u{2CC3}\u{2CC5}\u{2CC7}\u{2CC9}\u{2CCB}\u{2CCD}\u{2CCF}\u{2CD1}\u{2CD3}\u{2CD5}\u{2CD7}\u{2CD9}\u{2CDB}\u{2CDD}\u{2CDF}\u{2CE1}\u{2CE3}\u{2CE4}\u{2CEC}\u{2CEE}\u{2CF3}\u{2D00}-\u{2D25}\u{2D27}\u{2D2D}\u{A641}\u{A643}\u{A645}\u{A647}\u{A649}\u{A64B}\u{A64D}\u{A64F}\u{A651}\u{A653}\u{A655}\u{A657}\u{A659}\u{A65B}\u{A65D}\u{A65F}\u{A661}\u{A663}\u{A665}\u{A667}\u{A669}\u{A66B}\u{A66D}\u{A681}\u{A683}\u{A685}\u{A687}\u{A689}\u{A68B}\u{A68D}\u{A68F}\u{A691}\u{A693}\u{A695}\u{A697}\u{A699}\u{A69B}\u{A723}\u{A725}\u{A727}\u{A729}\u{A72B}\u{A72D}\u{A72F}-\u{A731}\u{A733}\u{A735}\u{A737}\u{A739}\u{A73B}\u{A73D}\u{A73F}\u{A741}\u{A743}\u{A745}\u{A747}\u{A749}\u{A74B}\u{A74D}\u{A74F}\u{A751}\u{A753}\u{A755}\u{A757}\u{A759}\u{A75B}\u{A75D}\u{A75F}\u{A761}\u{A763}\u{A765}\u{A767}\u{A769}\u{A76B}\u{A76D}\u{A76F}\u{A771}-\u{A778}\u{A77A}\u{A77C}\u{A77F}\u{A781}\u{A783}\u{A785}\u{A787}\u{A78C}\u{A78E}\u{A791}\u{A793}-\u{A795}\u{A797}\u{A799}\u{A79B}\u{A79D}\u{A79F}\u{A7A1}\u{A7A3}\u{A7A5}\u{A7A7}\u{A7A9}\u{A7B5}\u{A7B7}\u{A7FA}\u{AB30}-\u{AB5A}\u{AB60}-\u{AB65}\u{AB70}-\u{ABBF}\u{FB00}-\u{FB06}\u{FB13}-\u{FB17}\u{FF41}-\u{FF5A}0-9\u{00B2}\u{00B3}\u{00B9}\u{00BC}-\u{00BE}\u{0660}-\u{0669}\u{06F0}-\u{06F9}\u{07C0}-\u{07C9}\u{0966}-\u{096F}\u{09E6}-\u{09EF}\u{09F4}-\u{09F9}\u{0A66}-\u{0A6F}\u{0AE6}-\u{0AEF}\u{0B66}-\u{0B6F}\u{0B72}-\u{0B77}\u{0BE6}-\u{0BF2}\u{0C66}-\u{0C6F}\u{0C78}-\u{0C7E}\u{0CE6}-\u{0CEF}\u{0D66}-\u{0D75}\u{0DE6}-\u{0DEF}\u{0E50}-\u{0E59}\u{0ED0}-\u{0ED9}\u{0F20}-\u{0F33}\u{1040}-\u{1049}\u{1090}-\u{1099}\u{1369}-\u{137C}\u{16EE}-\u{16F0}\u{17E0}-\u{17E9}\u{17F0}-\u{17F9}\u{1810}-\u{1819}\u{1946}-\u{194F}\u{19D0}-\u{19DA}\u{1A80}-\u{1A89}\u{1A90}-\u{1A99}\u{1B50}-\u{1B59}\u{1BB0}-\u{1BB9}\u{1C40}-\u{1C49}\u{1C50}-\u{1C59}\u{2070}\u{2074}-\u{2079}\u{2080}-\u{2089}\u{2150}-\u{2182}\u{2185}-\u{2189}\u{2460}-\u{249B}\u{24EA}-\u{24FF}\u{2776}-\u{2793}\u{2CFD}\u{3007}\u{3021}-\u{3029}\u{3038}-\u{303A}\u{3192}-\u{3195}\u{3220}-\u{3229}\u{3248}-\u{324F}\u{3251}-\u{325F}\u{3280}-\u{3289}\u{32B1}-\u{32BF}\u{A620}-\u{A629}\u{A6E6}-\u{A6EF}\u{A830}-\u{A835}\u{A8D0}-\u{A8D9}\u{A900}-\u{A909}\u{A9D0}-\u{A9D9}\u{A9F0}-\u{A9F9}\u{AA50}-\u{AA59}\u{ABF0}-\u{ABF9}\u{FF10}-\u{FF19}])([A-Z\u{00C0}-\u{00D6}\u{00D8}-\u{00DE}\u{0100}\u{0102}\u{0104}\u{0106}\u{0108}\u{010A}\u{010C}\u{010E}\u{0110}\u{0112}\u{0114}\u{0116}\u{0118}\u{011A}\u{011C}\u{011E}\u{0120}\u{0122}\u{0124}\u{0126}\u{0128}\u{012A}\u{012C}\u{012E}\u{0130}\u{0132}\u{0134}\u{0136}\u{0139}\u{013B}\u{013D}\u{013F}\u{0141}\u{0143}\u{0145}\u{0147}\u{014A}\u{014C}\u{014E}\u{0150}\u{0152}\u{0154}\u{0156}\u{0158}\u{015A}\u{015C}\u{015E}\u{0160}\u{0162}\u{0164}\u{0166}\u{0168}\u{016A}\u{016C}\u{016E}\u{0170}\u{0172}\u{0174}\u{0176}\u{0178}\u{0179}\u{017B}\u{017D}\u{0181}\u{0182}\u{0184}\u{0186}\u{0187}\u{0189}-\u{018B}\u{018E}-\u{0191}\u{0193}\u{0194}\u{0196}-\u{0198}\u{019C}\u{019D}\u{019F}\u{01A0}\u{01A2}\u{01A4}\u{01A6}\u{01A7}\u{01A9}\u{01AC}\u{01AE}\u{01AF}\u{01B1}-\u{01B3}\u{01B5}\u{01B7}\u{01B8}\u{01BC}\u{01C4}\u{01C7}\u{01CA}\u{01CD}\u{01CF}\u{01D1}\u{01D3}\u{01D5}\u{01D7}\u{01D9}\u{01DB}\u{01DE}\u{01E0}\u{01E2}\u{01E4}\u{01E6}\u{01E8}\u{01EA}\u{01EC}\u{01EE}\u{01F1}\u{01F4}\u{01F6}-\u{01F8}\u{01FA}\u{01FC}\u{01FE}\u{0200}\u{0202}\u{0204}\u{0206}\u{0208}\u{020A}\u{020C}\u{020E}\u{0210}\u{0212}\u{0214}\u{0216}\u{0218}\u{021A}\u{021C}\u{021E}\u{0220}\u{0222}\u{0224}\u{0226}\u{0228}\u{022A}\u{022C}\u{022E}\u{0230}\u{0232}\u{023A}\u{023B}\u{023D}\u{023E}\u{0241}\u{0243}-\u{0246}\u{0248}\u{024A}\u{024C}\u{024E}\u{0370}\u{0372}\u{0376}\u{037F}\u{0386}\u{0388}-\u{038A}\u{038C}\u{038E}\u{038F}\u{0391}-\u{03A1}\u{03A3}-\u{03AB}\u{03CF}\u{03D2}-\u{03D4}\u{03D8}\u{03DA}\u{03DC}\u{03DE}\u{03E0}\u{03E2}\u{03E4}\u{03E6}\u{03E8}\u{03EA}\u{03EC}\u{03EE}\u{03F4}\u{03F7}\u{03F9}\u{03FA}\u{03FD}-\u{042F}\u{0460}\u{0462}\u{0464}\u{0466}\u{0468}\u{046A}\u{046C}\u{046E}\u{0470}\u{0472}\u{0474}\u{0476}\u{0478}\u{047A}\u{047C}\u{047E}\u{0480}\u{048A}\u{048C}\u{048E}\u{0490}\u{0492}\u{0494}\u{0496}\u{0498}\u{049A}\u{049C}\u{049E}\u{04A0}\u{04A2}\u{04A4}\u{04A6}\u{04A8}\u{04AA}\u{04AC}\u{04AE}\u{04B0}\u{04B2}\u{04B4}\u{04B6}\u{04B8}\u{04BA}\u{04BC}\u{04BE}\u{04C0}\u{04C1}\u{04C3}\u{04C5}\u{04C7}\u{04C9}\u{04CB}\u{04CD}\u{04D0}\u{04D2}\u{04D4}\u{04D6}\u{04D8}\u{04DA}\u{04DC}\u{04DE}\u{04E0}\u{04E2}\u{04E4}\u{04E6}\u{04E8}\u{04EA}\u{04EC}\u{04EE}\u{04F0}\u{04F2}\u{04F4}\u{04F6}\u{04F8}\u{04FA}\u{04FC}\u{04FE}\u{0500}\u{0502}\u{0504}\u{0506}\u{0508}\u{050A}\u{050C}\u{050E}\u{0510}\u{0512}\u{0514}\u{0516}\u{0518}\u{051A}\u{051C}\u{051E}\u{0520}\u{0522}\u{0524}\u{0526}\u{0528}\u{052A}\u{052C}\u{052E}\u{0531}-\u{0556}\u{10A0}-\u{10C5}\u{10C7}\u{10CD}\u{13A0}-\u{13F5}\u{1E00}\u{1E02}\u{1E04}\u{1E06}\u{1E08}\u{1E0A}\u{1E0C}\u{1E0E}\u{1E10}\u{1E12}\u{1E14}\u{1E16}\u{1E18}\u{1E1A}\u{1E1C}\u{1E1E}\u{1E20}\u{1E22}\u{1E24}\u{1E26}\u{1E28}\u{1E2A}\u{1E2C}\u{1E2E}\u{1E30}\u{1E32}\u{1E34}\u{1E36}\u{1E38}\u{1E3A}\u{1E3C}\u{1E3E}\u{1E40}\u{1E42}\u{1E44}\u{1E46}\u{1E48}\u{1E4A}\u{1E4C}\u{1E4E}\u{1E50}\u{1E52}\u{1E54}\u{1E56}\u{1E58}\u{1E5A}\u{1E5C}\u{1E5E}\u{1E60}\u{1E62}\u{1E64}\u{1E66}\u{1E68}\u{1E6A}\u{1E6C}\u{1E6E}\u{1E70}\u{1E72}\u{1E74}\u{1E76}\u{1E78}\u{1E7A}\u{1E7C}\u{1E7E}\u{1E80}\u{1E82}\u{1E84}\u{1E86}\u{1E88}\u{1E8A}\u{1E8C}\u{1E8E}\u{1E90}\u{1E92}\u{1E94}\u{1E9E}\u{1EA0}\u{1EA2}\u{1EA4}\u{1EA6}\u{1EA8}\u{1EAA}\u{1EAC}\u{1EAE}\u{1EB0}\u{1EB2}\u{1EB4}\u{1EB6}\u{1EB8}\u{1EBA}\u{1EBC}\u{1EBE}\u{1EC0}\u{1EC2}\u{1EC4}\u{1EC6}\u{1EC8}\u{1ECA}\u{1ECC}\u{1ECE}\u{1ED0}\u{1ED2}\u{1ED4}\u{1ED6}\u{1ED8}\u{1EDA}\u{1EDC}\u{1EDE}\u{1EE0}\u{1EE2}\u{1EE4}\u{1EE6}\u{1EE8}\u{1EEA}\u{1EEC}\u{1EEE}\u{1EF0}\u{1EF2}\u{1EF4}\u{1EF6}\u{1EF8}\u{1EFA}\u{1EFC}\u{1EFE}\u{1F08}-\u{1F0F}\u{1F18}-\u{1F1D}\u{1F28}-\u{1F2F}\u{1F38}-\u{1F3F}\u{1F48}-\u{1F4D}\u{1F59}\u{1F5B}\u{1F5D}\u{1F5F}\u{1F68}-\u{1F6F}\u{1FB8}-\u{1FBB}\u{1FC8}-\u{1FCB}\u{1FD8}-\u{1FDB}\u{1FE8}-\u{1FEC}\u{1FF8}-\u{1FFB}\u{2102}\u{2107}\u{210B}-\u{210D}\u{2110}-\u{2112}\u{2115}\u{2119}-\u{211D}\u{2124}\u{2126}\u{2128}\u{212A}-\u{212D}\u{2130}-\u{2133}\u{213E}\u{213F}\u{2145}\u{2183}\u{2C00}-\u{2C2E}\u{2C60}\u{2C62}-\u{2C64}\u{2C67}\u{2C69}\u{2C6B}\u{2C6D}-\u{2C70}\u{2C72}\u{2C75}\u{2C7E}-\u{2C80}\u{2C82}\u{2C84}\u{2C86}\u{2C88}\u{2C8A}\u{2C8C}\u{2C8E}\u{2C90}\u{2C92}\u{2C94}\u{2C96}\u{2C98}\u{2C9A}\u{2C9C}\u{2C9E}\u{2CA0}\u{2CA2}\u{2CA4}\u{2CA6}\u{2CA8}\u{2CAA}\u{2CAC}\u{2CAE}\u{2CB0}\u{2CB2}\u{2CB4}\u{2CB6}\u{2CB8}\u{2CBA}\u{2CBC}\u{2CBE}\u{2CC0}\u{2CC2}\u{2CC4}\u{2CC6}\u{2CC8}\u{2CCA}\u{2CCC}\u{2CCE}\u{2CD0}\u{2CD2}\u{2CD4}\u{2CD6}\u{2CD8}\u{2CDA}\u{2CDC}\u{2CDE}\u{2CE0}\u{2CE2}\u{2CEB}\u{2CED}\u{2CF2}\u{A640}\u{A642}\u{A644}\u{A646}\u{A648}\u{A64A}\u{A64C}\u{A64E}\u{A650}\u{A652}\u{A654}\u{A656}\u{A658}\u{A65A}\u{A65C}\u{A65E}\u{A660}\u{A662}\u{A664}\u{A666}\u{A668}\u{A66A}\u{A66C}\u{A680}\u{A682}\u{A684}\u{A686}\u{A688}\u{A68A}\u{A68C}\u{A68E}\u{A690}\u{A692}\u{A694}\u{A696}\u{A698}\u{A69A}\u{A722}\u{A724}\u{A726}\u{A728}\u{A72A}\u{A72C}\u{A72E}\u{A732}\u{A734}\u{A736}\u{A738}\u{A73A}\u{A73C}\u{A73E}\u{A740}\u{A742}\u{A744}\u{A746}\u{A748}\u{A74A}\u{A74C}\u{A74E}\u{A750}\u{A752}\u{A754}\u{A756}\u{A758}\u{A75A}\u{A75C}\u{A75E}\u{A760}\u{A762}\u{A764}\u{A766}\u{A768}\u{A76A}\u{A76C}\u{A76E}\u{A779}\u{A77B}\u{A77D}\u{A77E}\u{A780}\u{A782}\u{A784}\u{A786}\u{A78B}\u{A78D}\u{A790}\u{A792}\u{A796}\u{A798}\u{A79A}\u{A79C}\u{A79E}\u{A7A0}\u{A7A2}\u{A7A4}\u{A7A6}\u{A7A8}\u{A7AA}-\u{A7AD}\u{A7B0}-\u{A7B4}\u{A7B6}\u{FF21}-\u{FF3A}])/u";

    public const CAMEL_CASE_UPPER = "/([A-Z\u{00C0}-\u{00D6}\u{00D8}-\u{00DE}\u{0100}\u{0102}\u{0104}\u{0106}\u{0108}\u{010A}\u{010C}\u{010E}\u{0110}\u{0112}\u{0114}\u{0116}\u{0118}\u{011A}\u{011C}\u{011E}\u{0120}\u{0122}\u{0124}\u{0126}\u{0128}\u{012A}\u{012C}\u{012E}\u{0130}\u{0132}\u{0134}\u{0136}\u{0139}\u{013B}\u{013D}\u{013F}\u{0141}\u{0143}\u{0145}\u{0147}\u{014A}\u{014C}\u{014E}\u{0150}\u{0152}\u{0154}\u{0156}\u{0158}\u{015A}\u{015C}\u{015E}\u{0160}\u{0162}\u{0164}\u{0166}\u{0168}\u{016A}\u{016C}\u{016E}\u{0170}\u{0172}\u{0174}\u{0176}\u{0178}\u{0179}\u{017B}\u{017D}\u{0181}\u{0182}\u{0184}\u{0186}\u{0187}\u{0189}-\u{018B}\u{018E}-\u{0191}\u{0193}\u{0194}\u{0196}-\u{0198}\u{019C}\u{019D}\u{019F}\u{01A0}\u{01A2}\u{01A4}\u{01A6}\u{01A7}\u{01A9}\u{01AC}\u{01AE}\u{01AF}\u{01B1}-\u{01B3}\u{01B5}\u{01B7}\u{01B8}\u{01BC}\u{01C4}\u{01C7}\u{01CA}\u{01CD}\u{01CF}\u{01D1}\u{01D3}\u{01D5}\u{01D7}\u{01D9}\u{01DB}\u{01DE}\u{01E0}\u{01E2}\u{01E4}\u{01E6}\u{01E8}\u{01EA}\u{01EC}\u{01EE}\u{01F1}\u{01F4}\u{01F6}-\u{01F8}\u{01FA}\u{01FC}\u{01FE}\u{0200}\u{0202}\u{0204}\u{0206}\u{0208}\u{020A}\u{020C}\u{020E}\u{0210}\u{0212}\u{0214}\u{0216}\u{0218}\u{021A}\u{021C}\u{021E}\u{0220}\u{0222}\u{0224}\u{0226}\u{0228}\u{022A}\u{022C}\u{022E}\u{0230}\u{0232}\u{023A}\u{023B}\u{023D}\u{023E}\u{0241}\u{0243}-\u{0246}\u{0248}\u{024A}\u{024C}\u{024E}\u{0370}\u{0372}\u{0376}\u{037F}\u{0386}\u{0388}-\u{038A}\u{038C}\u{038E}\u{038F}\u{0391}-\u{03A1}\u{03A3}-\u{03AB}\u{03CF}\u{03D2}-\u{03D4}\u{03D8}\u{03DA}\u{03DC}\u{03DE}\u{03E0}\u{03E2}\u{03E4}\u{03E6}\u{03E8}\u{03EA}\u{03EC}\u{03EE}\u{03F4}\u{03F7}\u{03F9}\u{03FA}\u{03FD}-\u{042F}\u{0460}\u{0462}\u{0464}\u{0466}\u{0468}\u{046A}\u{046C}\u{046E}\u{0470}\u{0472}\u{0474}\u{0476}\u{0478}\u{047A}\u{047C}\u{047E}\u{0480}\u{048A}\u{048C}\u{048E}\u{0490}\u{0492}\u{0494}\u{0496}\u{0498}\u{049A}\u{049C}\u{049E}\u{04A0}\u{04A2}\u{04A4}\u{04A6}\u{04A8}\u{04AA}\u{04AC}\u{04AE}\u{04B0}\u{04B2}\u{04B4}\u{04B6}\u{04B8}\u{04BA}\u{04BC}\u{04BE}\u{04C0}\u{04C1}\u{04C3}\u{04C5}\u{04C7}\u{04C9}\u{04CB}\u{04CD}\u{04D0}\u{04D2}\u{04D4}\u{04D6}\u{04D8}\u{04DA}\u{04DC}\u{04DE}\u{04E0}\u{04E2}\u{04E4}\u{04E6}\u{04E8}\u{04EA}\u{04EC}\u{04EE}\u{04F0}\u{04F2}\u{04F4}\u{04F6}\u{04F8}\u{04FA}\u{04FC}\u{04FE}\u{0500}\u{0502}\u{0504}\u{0506}\u{0508}\u{050A}\u{050C}\u{050E}\u{0510}\u{0512}\u{0514}\u{0516}\u{0518}\u{051A}\u{051C}\u{051E}\u{0520}\u{0522}\u{0524}\u{0526}\u{0528}\u{052A}\u{052C}\u{052E}\u{0531}-\u{0556}\u{10A0}-\u{10C5}\u{10C7}\u{10CD}\u{13A0}-\u{13F5}\u{1E00}\u{1E02}\u{1E04}\u{1E06}\u{1E08}\u{1E0A}\u{1E0C}\u{1E0E}\u{1E10}\u{1E12}\u{1E14}\u{1E16}\u{1E18}\u{1E1A}\u{1E1C}\u{1E1E}\u{1E20}\u{1E22}\u{1E24}\u{1E26}\u{1E28}\u{1E2A}\u{1E2C}\u{1E2E}\u{1E30}\u{1E32}\u{1E34}\u{1E36}\u{1E38}\u{1E3A}\u{1E3C}\u{1E3E}\u{1E40}\u{1E42}\u{1E44}\u{1E46}\u{1E48}\u{1E4A}\u{1E4C}\u{1E4E}\u{1E50}\u{1E52}\u{1E54}\u{1E56}\u{1E58}\u{1E5A}\u{1E5C}\u{1E5E}\u{1E60}\u{1E62}\u{1E64}\u{1E66}\u{1E68}\u{1E6A}\u{1E6C}\u{1E6E}\u{1E70}\u{1E72}\u{1E74}\u{1E76}\u{1E78}\u{1E7A}\u{1E7C}\u{1E7E}\u{1E80}\u{1E82}\u{1E84}\u{1E86}\u{1E88}\u{1E8A}\u{1E8C}\u{1E8E}\u{1E90}\u{1E92}\u{1E94}\u{1E9E}\u{1EA0}\u{1EA2}\u{1EA4}\u{1EA6}\u{1EA8}\u{1EAA}\u{1EAC}\u{1EAE}\u{1EB0}\u{1EB2}\u{1EB4}\u{1EB6}\u{1EB8}\u{1EBA}\u{1EBC}\u{1EBE}\u{1EC0}\u{1EC2}\u{1EC4}\u{1EC6}\u{1EC8}\u{1ECA}\u{1ECC}\u{1ECE}\u{1ED0}\u{1ED2}\u{1ED4}\u{1ED6}\u{1ED8}\u{1EDA}\u{1EDC}\u{1EDE}\u{1EE0}\u{1EE2}\u{1EE4}\u{1EE6}\u{1EE8}\u{1EEA}\u{1EEC}\u{1EEE}\u{1EF0}\u{1EF2}\u{1EF4}\u{1EF6}\u{1EF8}\u{1EFA}\u{1EFC}\u{1EFE}\u{1F08}-\u{1F0F}\u{1F18}-\u{1F1D}\u{1F28}-\u{1F2F}\u{1F38}-\u{1F3F}\u{1F48}-\u{1F4D}\u{1F59}\u{1F5B}\u{1F5D}\u{1F5F}\u{1F68}-\u{1F6F}\u{1FB8}-\u{1FBB}\u{1FC8}-\u{1FCB}\u{1FD8}-\u{1FDB}\u{1FE8}-\u{1FEC}\u{1FF8}-\u{1FFB}\u{2102}\u{2107}\u{210B}-\u{210D}\u{2110}-\u{2112}\u{2115}\u{2119}-\u{211D}\u{2124}\u{2126}\u{2128}\u{212A}-\u{212D}\u{2130}-\u{2133}\u{213E}\u{213F}\u{2145}\u{2183}\u{2C00}-\u{2C2E}\u{2C60}\u{2C62}-\u{2C64}\u{2C67}\u{2C69}\u{2C6B}\u{2C6D}-\u{2C70}\u{2C72}\u{2C75}\u{2C7E}-\u{2C80}\u{2C82}\u{2C84}\u{2C86}\u{2C88}\u{2C8A}\u{2C8C}\u{2C8E}\u{2C90}\u{2C92}\u{2C94}\u{2C96}\u{2C98}\u{2C9A}\u{2C9C}\u{2C9E}\u{2CA0}\u{2CA2}\u{2CA4}\u{2CA6}\u{2CA8}\u{2CAA}\u{2CAC}\u{2CAE}\u{2CB0}\u{2CB2}\u{2CB4}\u{2CB6}\u{2CB8}\u{2CBA}\u{2CBC}\u{2CBE}\u{2CC0}\u{2CC2}\u{2CC4}\u{2CC6}\u{2CC8}\u{2CCA}\u{2CCC}\u{2CCE}\u{2CD0}\u{2CD2}\u{2CD4}\u{2CD6}\u{2CD8}\u{2CDA}\u{2CDC}\u{2CDE}\u{2CE0}\u{2CE2}\u{2CEB}\u{2CED}\u{2CF2}\u{A640}\u{A642}\u{A644}\u{A646}\u{A648}\u{A64A}\u{A64C}\u{A64E}\u{A650}\u{A652}\u{A654}\u{A656}\u{A658}\u{A65A}\u{A65C}\u{A65E}\u{A660}\u{A662}\u{A664}\u{A666}\u{A668}\u{A66A}\u{A66C}\u{A680}\u{A682}\u{A684}\u{A686}\u{A688}\u{A68A}\u{A68C}\u{A68E}\u{A690}\u{A692}\u{A694}\u{A696}\u{A698}\u{A69A}\u{A722}\u{A724}\u{A726}\u{A728}\u{A72A}\u{A72C}\u{A72E}\u{A732}\u{A734}\u{A736}\u{A738}\u{A73A}\u{A73C}\u{A73E}\u{A740}\u{A742}\u{A744}\u{A746}\u{A748}\u{A74A}\u{A74C}\u{A74E}\u{A750}\u{A752}\u{A754}\u{A756}\u{A758}\u{A75A}\u{A75C}\u{A75E}\u{A760}\u{A762}\u{A764}\u{A766}\u{A768}\u{A76A}\u{A76C}\u{A76E}\u{A779}\u{A77B}\u{A77D}\u{A77E}\u{A780}\u{A782}\u{A784}\u{A786}\u{A78B}\u{A78D}\u{A790}\u{A792}\u{A796}\u{A798}\u{A79A}\u{A79C}\u{A79E}\u{A7A0}\u{A7A2}\u{A7A4}\u{A7A6}\u{A7A8}\u{A7AA}-\u{A7AD}\u{A7B0}-\u{A7B4}\u{A7B6}\u{FF21}-\u{FF3A}])([A-Z\u{00C0}-\u{00D6}\u{00D8}-\u{00DE}\u{0100}\u{0102}\u{0104}\u{0106}\u{0108}\u{010A}\u{010C}\u{010E}\u{0110}\u{0112}\u{0114}\u{0116}\u{0118}\u{011A}\u{011C}\u{011E}\u{0120}\u{0122}\u{0124}\u{0126}\u{0128}\u{012A}\u{012C}\u{012E}\u{0130}\u{0132}\u{0134}\u{0136}\u{0139}\u{013B}\u{013D}\u{013F}\u{0141}\u{0143}\u{0145}\u{0147}\u{014A}\u{014C}\u{014E}\u{0150}\u{0152}\u{0154}\u{0156}\u{0158}\u{015A}\u{015C}\u{015E}\u{0160}\u{0162}\u{0164}\u{0166}\u{0168}\u{016A}\u{016C}\u{016E}\u{0170}\u{0172}\u{0174}\u{0176}\u{0178}\u{0179}\u{017B}\u{017D}\u{0181}\u{0182}\u{0184}\u{0186}\u{0187}\u{0189}-\u{018B}\u{018E}-\u{0191}\u{0193}\u{0194}\u{0196}-\u{0198}\u{019C}\u{019D}\u{019F}\u{01A0}\u{01A2}\u{01A4}\u{01A6}\u{01A7}\u{01A9}\u{01AC}\u{01AE}\u{01AF}\u{01B1}-\u{01B3}\u{01B5}\u{01B7}\u{01B8}\u{01BC}\u{01C4}\u{01C7}\u{01CA}\u{01CD}\u{01CF}\u{01D1}\u{01D3}\u{01D5}\u{01D7}\u{01D9}\u{01DB}\u{01DE}\u{01E0}\u{01E2}\u{01E4}\u{01E6}\u{01E8}\u{01EA}\u{01EC}\u{01EE}\u{01F1}\u{01F4}\u{01F6}-\u{01F8}\u{01FA}\u{01FC}\u{01FE}\u{0200}\u{0202}\u{0204}\u{0206}\u{0208}\u{020A}\u{020C}\u{020E}\u{0210}\u{0212}\u{0214}\u{0216}\u{0218}\u{021A}\u{021C}\u{021E}\u{0220}\u{0222}\u{0224}\u{0226}\u{0228}\u{022A}\u{022C}\u{022E}\u{0230}\u{0232}\u{023A}\u{023B}\u{023D}\u{023E}\u{0241}\u{0243}-\u{0246}\u{0248}\u{024A}\u{024C}\u{024E}\u{0370}\u{0372}\u{0376}\u{037F}\u{0386}\u{0388}-\u{038A}\u{038C}\u{038E}\u{038F}\u{0391}-\u{03A1}\u{03A3}-\u{03AB}\u{03CF}\u{03D2}-\u{03D4}\u{03D8}\u{03DA}\u{03DC}\u{03DE}\u{03E0}\u{03E2}\u{03E4}\u{03E6}\u{03E8}\u{03EA}\u{03EC}\u{03EE}\u{03F4}\u{03F7}\u{03F9}\u{03FA}\u{03FD}-\u{042F}\u{0460}\u{0462}\u{0464}\u{0466}\u{0468}\u{046A}\u{046C}\u{046E}\u{0470}\u{0472}\u{0474}\u{0476}\u{0478}\u{047A}\u{047C}\u{047E}\u{0480}\u{048A}\u{048C}\u{048E}\u{0490}\u{0492}\u{0494}\u{0496}\u{0498}\u{049A}\u{049C}\u{049E}\u{04A0}\u{04A2}\u{04A4}\u{04A6}\u{04A8}\u{04AA}\u{04AC}\u{04AE}\u{04B0}\u{04B2}\u{04B4}\u{04B6}\u{04B8}\u{04BA}\u{04BC}\u{04BE}\u{04C0}\u{04C1}\u{04C3}\u{04C5}\u{04C7}\u{04C9}\u{04CB}\u{04CD}\u{04D0}\u{04D2}\u{04D4}\u{04D6}\u{04D8}\u{04DA}\u{04DC}\u{04DE}\u{04E0}\u{04E2}\u{04E4}\u{04E6}\u{04E8}\u{04EA}\u{04EC}\u{04EE}\u{04F0}\u{04F2}\u{04F4}\u{04F6}\u{04F8}\u{04FA}\u{04FC}\u{04FE}\u{0500}\u{0502}\u{0504}\u{0506}\u{0508}\u{050A}\u{050C}\u{050E}\u{0510}\u{0512}\u{0514}\u{0516}\u{0518}\u{051A}\u{051C}\u{051E}\u{0520}\u{0522}\u{0524}\u{0526}\u{0528}\u{052A}\u{052C}\u{052E}\u{0531}-\u{0556}\u{10A0}-\u{10C5}\u{10C7}\u{10CD}\u{13A0}-\u{13F5}\u{1E00}\u{1E02}\u{1E04}\u{1E06}\u{1E08}\u{1E0A}\u{1E0C}\u{1E0E}\u{1E10}\u{1E12}\u{1E14}\u{1E16}\u{1E18}\u{1E1A}\u{1E1C}\u{1E1E}\u{1E20}\u{1E22}\u{1E24}\u{1E26}\u{1E28}\u{1E2A}\u{1E2C}\u{1E2E}\u{1E30}\u{1E32}\u{1E34}\u{1E36}\u{1E38}\u{1E3A}\u{1E3C}\u{1E3E}\u{1E40}\u{1E42}\u{1E44}\u{1E46}\u{1E48}\u{1E4A}\u{1E4C}\u{1E4E}\u{1E50}\u{1E52}\u{1E54}\u{1E56}\u{1E58}\u{1E5A}\u{1E5C}\u{1E5E}\u{1E60}\u{1E62}\u{1E64}\u{1E66}\u{1E68}\u{1E6A}\u{1E6C}\u{1E6E}\u{1E70}\u{1E72}\u{1E74}\u{1E76}\u{1E78}\u{1E7A}\u{1E7C}\u{1E7E}\u{1E80}\u{1E82}\u{1E84}\u{1E86}\u{1E88}\u{1E8A}\u{1E8C}\u{1E8E}\u{1E90}\u{1E92}\u{1E94}\u{1E9E}\u{1EA0}\u{1EA2}\u{1EA4}\u{1EA6}\u{1EA8}\u{1EAA}\u{1EAC}\u{1EAE}\u{1EB0}\u{1EB2}\u{1EB4}\u{1EB6}\u{1EB8}\u{1EBA}\u{1EBC}\u{1EBE}\u{1EC0}\u{1EC2}\u{1EC4}\u{1EC6}\u{1EC8}\u{1ECA}\u{1ECC}\u{1ECE}\u{1ED0}\u{1ED2}\u{1ED4}\u{1ED6}\u{1ED8}\u{1EDA}\u{1EDC}\u{1EDE}\u{1EE0}\u{1EE2}\u{1EE4}\u{1EE6}\u{1EE8}\u{1EEA}\u{1EEC}\u{1EEE}\u{1EF0}\u{1EF2}\u{1EF4}\u{1EF6}\u{1EF8}\u{1EFA}\u{1EFC}\u{1EFE}\u{1F08}-\u{1F0F}\u{1F18}-\u{1F1D}\u{1F28}-\u{1F2F}\u{1F38}-\u{1F3F}\u{1F48}-\u{1F4D}\u{1F59}\u{1F5B}\u{1F5D}\u{1F5F}\u{1F68}-\u{1F6F}\u{1FB8}-\u{1FBB}\u{1FC8}-\u{1FCB}\u{1FD8}-\u{1FDB}\u{1FE8}-\u{1FEC}\u{1FF8}-\u{1FFB}\u{2102}\u{2107}\u{210B}-\u{210D}\u{2110}-\u{2112}\u{2115}\u{2119}-\u{211D}\u{2124}\u{2126}\u{2128}\u{212A}-\u{212D}\u{2130}-\u{2133}\u{213E}\u{213F}\u{2145}\u{2183}\u{2C00}-\u{2C2E}\u{2C60}\u{2C62}-\u{2C64}\u{2C67}\u{2C69}\u{2C6B}\u{2C6D}-\u{2C70}\u{2C72}\u{2C75}\u{2C7E}-\u{2C80}\u{2C82}\u{2C84}\u{2C86}\u{2C88}\u{2C8A}\u{2C8C}\u{2C8E}\u{2C90}\u{2C92}\u{2C94}\u{2C96}\u{2C98}\u{2C9A}\u{2C9C}\u{2C9E}\u{2CA0}\u{2CA2}\u{2CA4}\u{2CA6}\u{2CA8}\u{2CAA}\u{2CAC}\u{2CAE}\u{2CB0}\u{2CB2}\u{2CB4}\u{2CB6}\u{2CB8}\u{2CBA}\u{2CBC}\u{2CBE}\u{2CC0}\u{2CC2}\u{2CC4}\u{2CC6}\u{2CC8}\u{2CCA}\u{2CCC}\u{2CCE}\u{2CD0}\u{2CD2}\u{2CD4}\u{2CD6}\u{2CD8}\u{2CDA}\u{2CDC}\u{2CDE}\u{2CE0}\u{2CE2}\u{2CEB}\u{2CED}\u{2CF2}\u{A640}\u{A642}\u{A644}\u{A646}\u{A648}\u{A64A}\u{A64C}\u{A64E}\u{A650}\u{A652}\u{A654}\u{A656}\u{A658}\u{A65A}\u{A65C}\u{A65E}\u{A660}\u{A662}\u{A664}\u{A666}\u{A668}\u{A66A}\u{A66C}\u{A680}\u{A682}\u{A684}\u{A686}\u{A688}\u{A68A}\u{A68C}\u{A68E}\u{A690}\u{A692}\u{A694}\u{A696}\u{A698}\u{A69A}\u{A722}\u{A724}\u{A726}\u{A728}\u{A72A}\u{A72C}\u{A72E}\u{A732}\u{A734}\u{A736}\u{A738}\u{A73A}\u{A73C}\u{A73E}\u{A740}\u{A742}\u{A744}\u{A746}\u{A748}\u{A74A}\u{A74C}\u{A74E}\u{A750}\u{A752}\u{A754}\u{A756}\u{A758}\u{A75A}\u{A75C}\u{A75E}\u{A760}\u{A762}\u{A764}\u{A766}\u{A768}\u{A76A}\u{A76C}\u{A76E}\u{A779}\u{A77B}\u{A77D}\u{A77E}\u{A780}\u{A782}\u{A784}\u{A786}\u{A78B}\u{A78D}\u{A790}\u{A792}\u{A796}\u{A798}\u{A79A}\u{A79C}\u{A79E}\u{A7A0}\u{A7A2}\u{A7A4}\u{A7A6}\u{A7A8}\u{A7AA}-\u{A7AD}\u{A7B0}-\u{A7B4}\u{A7B6}\u{FF21}-\u{FF3A}][a-z\u{00B5}\u{00DF}-\u{00F6}\u{00F8}-\u{00FF}\u{0101}\u{0103}\u{0105}\u{0107}\u{0109}\u{010B}\u{010D}\u{010F}\u{0111}\u{0113}\u{0115}\u{0117}\u{0119}\u{011B}\u{011D}\u{011F}\u{0121}\u{0123}\u{0125}\u{0127}\u{0129}\u{012B}\u{012D}\u{012F}\u{0131}\u{0133}\u{0135}\u{0137}\u{0138}\u{013A}\u{013C}\u{013E}\u{0140}\u{0142}\u{0144}\u{0146}\u{0148}\u{0149}\u{014B}\u{014D}\u{014F}\u{0151}\u{0153}\u{0155}\u{0157}\u{0159}\u{015B}\u{015D}\u{015F}\u{0161}\u{0163}\u{0165}\u{0167}\u{0169}\u{016B}\u{016D}\u{016F}\u{0171}\u{0173}\u{0175}\u{0177}\u{017A}\u{017C}\u{017E}-\u{0180}\u{0183}\u{0185}\u{0188}\u{018C}\u{018D}\u{0192}\u{0195}\u{0199}-\u{019B}\u{019E}\u{01A1}\u{01A3}\u{01A5}\u{01A8}\u{01AA}\u{01AB}\u{01AD}\u{01B0}\u{01B4}\u{01B6}\u{01B9}\u{01BA}\u{01BD}-\u{01BF}\u{01C6}\u{01C9}\u{01CC}\u{01CE}\u{01D0}\u{01D2}\u{01D4}\u{01D6}\u{01D8}\u{01DA}\u{01DC}\u{01DD}\u{01DF}\u{01E1}\u{01E3}\u{01E5}\u{01E7}\u{01E9}\u{01EB}\u{01ED}\u{01EF}\u{01F0}\u{01F3}\u{01F5}\u{01F9}\u{01FB}\u{01FD}\u{01FF}\u{0201}\u{0203}\u{0205}\u{0207}\u{0209}\u{020B}\u{020D}\u{020F}\u{0211}\u{0213}\u{0215}\u{0217}\u{0219}\u{021B}\u{021D}\u{021F}\u{0221}\u{0223}\u{0225}\u{0227}\u{0229}\u{022B}\u{022D}\u{022F}\u{0231}\u{0233}-\u{0239}\u{023C}\u{023F}\u{0240}\u{0242}\u{0247}\u{0249}\u{024B}\u{024D}\u{024F}-\u{0293}\u{0295}-\u{02AF}\u{0371}\u{0373}\u{0377}\u{037B}-\u{037D}\u{0390}\u{03AC}-\u{03CE}\u{03D0}\u{03D1}\u{03D5}-\u{03D7}\u{03D9}\u{03DB}\u{03DD}\u{03DF}\u{03E1}\u{03E3}\u{03E5}\u{03E7}\u{03E9}\u{03EB}\u{03ED}\u{03EF}-\u{03F3}\u{03F5}\u{03F8}\u{03FB}\u{03FC}\u{0430}-\u{045F}\u{0461}\u{0463}\u{0465}\u{0467}\u{0469}\u{046B}\u{046D}\u{046F}\u{0471}\u{0473}\u{0475}\u{0477}\u{0479}\u{047B}\u{047D}\u{047F}\u{0481}\u{048B}\u{048D}\u{048F}\u{0491}\u{0493}\u{0495}\u{0497}\u{0499}\u{049B}\u{049D}\u{049F}\u{04A1}\u{04A3}\u{04A5}\u{04A7}\u{04A9}\u{04AB}\u{04AD}\u{04AF}\u{04B1}\u{04B3}\u{04B5}\u{04B7}\u{04B9}\u{04BB}\u{04BD}\u{04BF}\u{04C2}\u{04C4}\u{04C6}\u{04C8}\u{04CA}\u{04CC}\u{04CE}\u{04CF}\u{04D1}\u{04D3}\u{04D5}\u{04D7}\u{04D9}\u{04DB}\u{04DD}\u{04DF}\u{04E1}\u{04E3}\u{04E5}\u{04E7}\u{04E9}\u{04EB}\u{04ED}\u{04EF}\u{04F1}\u{04F3}\u{04F5}\u{04F7}\u{04F9}\u{04FB}\u{04FD}\u{04FF}\u{0501}\u{0503}\u{0505}\u{0507}\u{0509}\u{050B}\u{050D}\u{050F}\u{0511}\u{0513}\u{0515}\u{0517}\u{0519}\u{051B}\u{051D}\u{051F}\u{0521}\u{0523}\u{0525}\u{0527}\u{0529}\u{052B}\u{052D}\u{052F}\u{0561}-\u{0587}\u{13F8}-\u{13FD}\u{1D00}-\u{1D2B}\u{1D6B}-\u{1D77}\u{1D79}-\u{1D9A}\u{1E01}\u{1E03}\u{1E05}\u{1E07}\u{1E09}\u{1E0B}\u{1E0D}\u{1E0F}\u{1E11}\u{1E13}\u{1E15}\u{1E17}\u{1E19}\u{1E1B}\u{1E1D}\u{1E1F}\u{1E21}\u{1E23}\u{1E25}\u{1E27}\u{1E29}\u{1E2B}\u{1E2D}\u{1E2F}\u{1E31}\u{1E33}\u{1E35}\u{1E37}\u{1E39}\u{1E3B}\u{1E3D}\u{1E3F}\u{1E41}\u{1E43}\u{1E45}\u{1E47}\u{1E49}\u{1E4B}\u{1E4D}\u{1E4F}\u{1E51}\u{1E53}\u{1E55}\u{1E57}\u{1E59}\u{1E5B}\u{1E5D}\u{1E5F}\u{1E61}\u{1E63}\u{1E65}\u{1E67}\u{1E69}\u{1E6B}\u{1E6D}\u{1E6F}\u{1E71}\u{1E73}\u{1E75}\u{1E77}\u{1E79}\u{1E7B}\u{1E7D}\u{1E7F}\u{1E81}\u{1E83}\u{1E85}\u{1E87}\u{1E89}\u{1E8B}\u{1E8D}\u{1E8F}\u{1E91}\u{1E93}\u{1E95}-\u{1E9D}\u{1E9F}\u{1EA1}\u{1EA3}\u{1EA5}\u{1EA7}\u{1EA9}\u{1EAB}\u{1EAD}\u{1EAF}\u{1EB1}\u{1EB3}\u{1EB5}\u{1EB7}\u{1EB9}\u{1EBB}\u{1EBD}\u{1EBF}\u{1EC1}\u{1EC3}\u{1EC5}\u{1EC7}\u{1EC9}\u{1ECB}\u{1ECD}\u{1ECF}\u{1ED1}\u{1ED3}\u{1ED5}\u{1ED7}\u{1ED9}\u{1EDB}\u{1EDD}\u{1EDF}\u{1EE1}\u{1EE3}\u{1EE5}\u{1EE7}\u{1EE9}\u{1EEB}\u{1EED}\u{1EEF}\u{1EF1}\u{1EF3}\u{1EF5}\u{1EF7}\u{1EF9}\u{1EFB}\u{1EFD}\u{1EFF}-\u{1F07}\u{1F10}-\u{1F15}\u{1F20}-\u{1F27}\u{1F30}-\u{1F37}\u{1F40}-\u{1F45}\u{1F50}-\u{1F57}\u{1F60}-\u{1F67}\u{1F70}-\u{1F7D}\u{1F80}-\u{1F87}\u{1F90}-\u{1F97}\u{1FA0}-\u{1FA7}\u{1FB0}-\u{1FB4}\u{1FB6}\u{1FB7}\u{1FBE}\u{1FC2}-\u{1FC4}\u{1FC6}\u{1FC7}\u{1FD0}-\u{1FD3}\u{1FD6}\u{1FD7}\u{1FE0}-\u{1FE7}\u{1FF2}-\u{1FF4}\u{1FF6}\u{1FF7}\u{210A}\u{210E}\u{210F}\u{2113}\u{212F}\u{2134}\u{2139}\u{213C}\u{213D}\u{2146}-\u{2149}\u{214E}\u{2184}\u{2C30}-\u{2C5E}\u{2C61}\u{2C65}\u{2C66}\u{2C68}\u{2C6A}\u{2C6C}\u{2C71}\u{2C73}\u{2C74}\u{2C76}-\u{2C7B}\u{2C81}\u{2C83}\u{2C85}\u{2C87}\u{2C89}\u{2C8B}\u{2C8D}\u{2C8F}\u{2C91}\u{2C93}\u{2C95}\u{2C97}\u{2C99}\u{2C9B}\u{2C9D}\u{2C9F}\u{2CA1}\u{2CA3}\u{2CA5}\u{2CA7}\u{2CA9}\u{2CAB}\u{2CAD}\u{2CAF}\u{2CB1}\u{2CB3}\u{2CB5}\u{2CB7}\u{2CB9}\u{2CBB}\u{2CBD}\u{2CBF}\u{2CC1}\u{2CC3}\u{2CC5}\u{2CC7}\u{2CC9}\u{2CCB}\u{2CCD}\u{2CCF}\u{2CD1}\u{2CD3}\u{2CD5}\u{2CD7}\u{2CD9}\u{2CDB}\u{2CDD}\u{2CDF}\u{2CE1}\u{2CE3}\u{2CE4}\u{2CEC}\u{2CEE}\u{2CF3}\u{2D00}-\u{2D25}\u{2D27}\u{2D2D}\u{A641}\u{A643}\u{A645}\u{A647}\u{A649}\u{A64B}\u{A64D}\u{A64F}\u{A651}\u{A653}\u{A655}\u{A657}\u{A659}\u{A65B}\u{A65D}\u{A65F}\u{A661}\u{A663}\u{A665}\u{A667}\u{A669}\u{A66B}\u{A66D}\u{A681}\u{A683}\u{A685}\u{A687}\u{A689}\u{A68B}\u{A68D}\u{A68F}\u{A691}\u{A693}\u{A695}\u{A697}\u{A699}\u{A69B}\u{A723}\u{A725}\u{A727}\u{A729}\u{A72B}\u{A72D}\u{A72F}-\u{A731}\u{A733}\u{A735}\u{A737}\u{A739}\u{A73B}\u{A73D}\u{A73F}\u{A741}\u{A743}\u{A745}\u{A747}\u{A749}\u{A74B}\u{A74D}\u{A74F}\u{A751}\u{A753}\u{A755}\u{A757}\u{A759}\u{A75B}\u{A75D}\u{A75F}\u{A761}\u{A763}\u{A765}\u{A767}\u{A769}\u{A76B}\u{A76D}\u{A76F}\u{A771}-\u{A778}\u{A77A}\u{A77C}\u{A77F}\u{A781}\u{A783}\u{A785}\u{A787}\u{A78C}\u{A78E}\u{A791}\u{A793}-\u{A795}\u{A797}\u{A799}\u{A79B}\u{A79D}\u{A79F}\u{A7A1}\u{A7A3}\u{A7A5}\u{A7A7}\u{A7A9}\u{A7B5}\u{A7B7}\u{A7FA}\u{AB30}-\u{AB5A}\u{AB60}-\u{AB65}\u{AB70}-\u{ABBF}\u{FB00}-\u{FB06}\u{FB13}-\u{FB17}\u{FF41}-\u{FF5A}])/u";

    public const NON_WORD = "/[^A-Za-z\u{00AA}\u{00B5}\u{00BA}\u{00C0}-\u{00D6}\u{00D8}-\u{00F6}\u{00F8}-\u{02C1}\u{02C6}-\u{02D1}\u{02E0}-\u{02E4}\u{02EC}\u{02EE}\u{0370}-\u{0374}\u{0376}\u{0377}\u{037A}-\u{037D}\u{037F}\u{0386}\u{0388}-\u{038A}\u{038C}\u{038E}-\u{03A1}\u{03A3}-\u{03F5}\u{03F7}-\u{0481}\u{048A}-\u{052F}\u{0531}-\u{0556}\u{0559}\u{0561}-\u{0587}\u{05D0}-\u{05EA}\u{05F0}-\u{05F2}\u{0620}-\u{064A}\u{066E}\u{066F}\u{0671}-\u{06D3}\u{06D5}\u{06E5}\u{06E6}\u{06EE}\u{06EF}\u{06FA}-\u{06FC}\u{06FF}\u{0710}\u{0712}-\u{072F}\u{074D}-\u{07A5}\u{07B1}\u{07CA}-\u{07EA}\u{07F4}\u{07F5}\u{07FA}\u{0800}-\u{0815}\u{081A}\u{0824}\u{0828}\u{0840}-\u{0858}\u{08A0}-\u{08B4}\u{0904}-\u{0939}\u{093D}\u{0950}\u{0958}-\u{0961}\u{0971}-\u{0980}\u{0985}-\u{098C}\u{098F}\u{0990}\u{0993}-\u{09A8}\u{09AA}-\u{09B0}\u{09B2}\u{09B6}-\u{09B9}\u{09BD}\u{09CE}\u{09DC}\u{09DD}\u{09DF}-\u{09E1}\u{09F0}\u{09F1}\u{0A05}-\u{0A0A}\u{0A0F}\u{0A10}\u{0A13}-\u{0A28}\u{0A2A}-\u{0A30}\u{0A32}\u{0A33}\u{0A35}\u{0A36}\u{0A38}\u{0A39}\u{0A59}-\u{0A5C}\u{0A5E}\u{0A72}-\u{0A74}\u{0A85}-\u{0A8D}\u{0A8F}-\u{0A91}\u{0A93}-\u{0AA8}\u{0AAA}-\u{0AB0}\u{0AB2}\u{0AB3}\u{0AB5}-\u{0AB9}\u{0ABD}\u{0AD0}\u{0AE0}\u{0AE1}\u{0AF9}\u{0B05}-\u{0B0C}\u{0B0F}\u{0B10}\u{0B13}-\u{0B28}\u{0B2A}-\u{0B30}\u{0B32}\u{0B33}\u{0B35}-\u{0B39}\u{0B3D}\u{0B5C}\u{0B5D}\u{0B5F}-\u{0B61}\u{0B71}\u{0B83}\u{0B85}-\u{0B8A}\u{0B8E}-\u{0B90}\u{0B92}-\u{0B95}\u{0B99}\u{0B9A}\u{0B9C}\u{0B9E}\u{0B9F}\u{0BA3}\u{0BA4}\u{0BA8}-\u{0BAA}\u{0BAE}-\u{0BB9}\u{0BD0}\u{0C05}-\u{0C0C}\u{0C0E}-\u{0C10}\u{0C12}-\u{0C28}\u{0C2A}-\u{0C39}\u{0C3D}\u{0C58}-\u{0C5A}\u{0C60}\u{0C61}\u{0C85}-\u{0C8C}\u{0C8E}-\u{0C90}\u{0C92}-\u{0CA8}\u{0CAA}-\u{0CB3}\u{0CB5}-\u{0CB9}\u{0CBD}\u{0CDE}\u{0CE0}\u{0CE1}\u{0CF1}\u{0CF2}\u{0D05}-\u{0D0C}\u{0D0E}-\u{0D10}\u{0D12}-\u{0D3A}\u{0D3D}\u{0D4E}\u{0D5F}-\u{0D61}\u{0D7A}-\u{0D7F}\u{0D85}-\u{0D96}\u{0D9A}-\u{0DB1}\u{0DB3}-\u{0DBB}\u{0DBD}\u{0DC0}-\u{0DC6}\u{0E01}-\u{0E30}\u{0E32}\u{0E33}\u{0E40}-\u{0E46}\u{0E81}\u{0E82}\u{0E84}\u{0E87}\u{0E88}\u{0E8A}\u{0E8D}\u{0E94}-\u{0E97}\u{0E99}-\u{0E9F}\u{0EA1}-\u{0EA3}\u{0EA5}\u{0EA7}\u{0EAA}\u{0EAB}\u{0EAD}-\u{0EB0}\u{0EB2}\u{0EB3}\u{0EBD}\u{0EC0}-\u{0EC4}\u{0EC6}\u{0EDC}-\u{0EDF}\u{0F00}\u{0F40}-\u{0F47}\u{0F49}-\u{0F6C}\u{0F88}-\u{0F8C}\u{1000}-\u{102A}\u{103F}\u{1050}-\u{1055}\u{105A}-\u{105D}\u{1061}\u{1065}\u{1066}\u{106E}-\u{1070}\u{1075}-\u{1081}\u{108E}\u{10A0}-\u{10C5}\u{10C7}\u{10CD}\u{10D0}-\u{10FA}\u{10FC}-\u{1248}\u{124A}-\u{124D}\u{1250}-\u{1256}\u{1258}\u{125A}-\u{125D}\u{1260}-\u{1288}\u{128A}-\u{128D}\u{1290}-\u{12B0}\u{12B2}-\u{12B5}\u{12B8}-\u{12BE}\u{12C0}\u{12C2}-\u{12C5}\u{12C8}-\u{12D6}\u{12D8}-\u{1310}\u{1312}-\u{1315}\u{1318}-\u{135A}\u{1380}-\u{138F}\u{13A0}-\u{13F5}\u{13F8}-\u{13FD}\u{1401}-\u{166C}\u{166F}-\u{167F}\u{1681}-\u{169A}\u{16A0}-\u{16EA}\u{16F1}-\u{16F8}\u{1700}-\u{170C}\u{170E}-\u{1711}\u{1720}-\u{1731}\u{1740}-\u{1751}\u{1760}-\u{176C}\u{176E}-\u{1770}\u{1780}-\u{17B3}\u{17D7}\u{17DC}\u{1820}-\u{1877}\u{1880}-\u{18A8}\u{18AA}\u{18B0}-\u{18F5}\u{1900}-\u{191E}\u{1950}-\u{196D}\u{1970}-\u{1974}\u{1980}-\u{19AB}\u{19B0}-\u{19C9}\u{1A00}-\u{1A16}\u{1A20}-\u{1A54}\u{1AA7}\u{1B05}-\u{1B33}\u{1B45}-\u{1B4B}\u{1B83}-\u{1BA0}\u{1BAE}\u{1BAF}\u{1BBA}-\u{1BE5}\u{1C00}-\u{1C23}\u{1C4D}-\u{1C4F}\u{1C5A}-\u{1C7D}\u{1CE9}-\u{1CEC}\u{1CEE}-\u{1CF1}\u{1CF5}\u{1CF6}\u{1D00}-\u{1DBF}\u{1E00}-\u{1F15}\u{1F18}-\u{1F1D}\u{1F20}-\u{1F45}\u{1F48}-\u{1F4D}\u{1F50}-\u{1F57}\u{1F59}\u{1F5B}\u{1F5D}\u{1F5F}-\u{1F7D}\u{1F80}-\u{1FB4}\u{1FB6}-\u{1FBC}\u{1FBE}\u{1FC2}-\u{1FC4}\u{1FC6}-\u{1FCC}\u{1FD0}-\u{1FD3}\u{1FD6}-\u{1FDB}\u{1FE0}-\u{1FEC}\u{1FF2}-\u{1FF4}\u{1FF6}-\u{1FFC}\u{2071}\u{207F}\u{2090}-\u{209C}\u{2102}\u{2107}\u{210A}-\u{2113}\u{2115}\u{2119}-\u{211D}\u{2124}\u{2126}\u{2128}\u{212A}-\u{212D}\u{212F}-\u{2139}\u{213C}-\u{213F}\u{2145}-\u{2149}\u{214E}\u{2183}\u{2184}\u{2C00}-\u{2C2E}\u{2C30}-\u{2C5E}\u{2C60}-\u{2CE4}\u{2CEB}-\u{2CEE}\u{2CF2}\u{2CF3}\u{2D00}-\u{2D25}\u{2D27}\u{2D2D}\u{2D30}-\u{2D67}\u{2D6F}\u{2D80}-\u{2D96}\u{2DA0}-\u{2DA6}\u{2DA8}-\u{2DAE}\u{2DB0}-\u{2DB6}\u{2DB8}-\u{2DBE}\u{2DC0}-\u{2DC6}\u{2DC8}-\u{2DCE}\u{2DD0}-\u{2DD6}\u{2DD8}-\u{2DDE}\u{2E2F}\u{3005}\u{3006}\u{3031}-\u{3035}\u{303B}\u{303C}\u{3041}-\u{3096}\u{309D}-\u{309F}\u{30A1}-\u{30FA}\u{30FC}-\u{30FF}\u{3105}-\u{312D}\u{3131}-\u{318E}\u{31A0}-\u{31BA}\u{31F0}-\u{31FF}\u{3400}-\u{4DB5}\u{4E00}-\u{9FD5}\u{A000}-\u{A48C}\u{A4D0}-\u{A4FD}\u{A500}-\u{A60C}\u{A610}-\u{A61F}\u{A62A}\u{A62B}\u{A640}-\u{A66E}\u{A67F}-\u{A69D}\u{A6A0}-\u{A6E5}\u{A717}-\u{A71F}\u{A722}-\u{A788}\u{A78B}-\u{A7AD}\u{A7B0}-\u{A7B7}\u{A7F7}-\u{A801}\u{A803}-\u{A805}\u{A807}-\u{A80A}\u{A80C}-\u{A822}\u{A840}-\u{A873}\u{A882}-\u{A8B3}\u{A8F2}-\u{A8F7}\u{A8FB}\u{A8FD}\u{A90A}-\u{A925}\u{A930}-\u{A946}\u{A960}-\u{A97C}\u{A984}-\u{A9B2}\u{A9CF}\u{A9E0}-\u{A9E4}\u{A9E6}-\u{A9EF}\u{A9FA}-\u{A9FE}\u{AA00}-\u{AA28}\u{AA40}-\u{AA42}\u{AA44}-\u{AA4B}\u{AA60}-\u{AA76}\u{AA7A}\u{AA7E}-\u{AAAF}\u{AAB1}\u{AAB5}\u{AAB6}\u{AAB9}-\u{AABD}\u{AAC0}\u{AAC2}\u{AADB}-\u{AADD}\u{AAE0}-\u{AAEA}\u{AAF2}-\u{AAF4}\u{AB01}-\u{AB06}\u{AB09}-\u{AB0E}\u{AB11}-\u{AB16}\u{AB20}-\u{AB26}\u{AB28}-\u{AB2E}\u{AB30}-\u{AB5A}\u{AB5C}-\u{AB65}\u{AB70}-\u{ABE2}\u{AC00}-\u{D7A3}\u{D7B0}-\u{D7C6}\u{D7CB}-\u{D7FB}\u{F900}-\u{FA6D}\u{FA70}-\u{FAD9}\u{FB00}-\u{FB06}\u{FB13}-\u{FB17}\u{FB1D}\u{FB1F}-\u{FB28}\u{FB2A}-\u{FB36}\u{FB38}-\u{FB3C}\u{FB3E}\u{FB40}\u{FB41}\u{FB43}\u{FB44}\u{FB46}-\u{FBB1}\u{FBD3}-\u{FD3D}\u{FD50}-\u{FD8F}\u{FD92}-\u{FDC7}\u{FDF0}-\u{FDFB}\u{FE70}-\u{FE74}\u{FE76}-\u{FEFC}\u{FF21}-\u{FF3A}\u{FF41}-\u{FF5A}\u{FF66}-\u{FFBE}\u{FFC2}-\u{FFC7}\u{FFCA}-\u{FFCF}\u{FFD2}-\u{FFD7}\u{FFDA}-\u{FFDC}0-9\u{00B2}\u{00B3}\u{00B9}\u{00BC}-\u{00BE}\u{0660}-\u{0669}\u{06F0}-\u{06F9}\u{07C0}-\u{07C9}\u{0966}-\u{096F}\u{09E6}-\u{09EF}\u{09F4}-\u{09F9}\u{0A66}-\u{0A6F}\u{0AE6}-\u{0AEF}\u{0B66}-\u{0B6F}\u{0B72}-\u{0B77}\u{0BE6}-\u{0BF2}\u{0C66}-\u{0C6F}\u{0C78}-\u{0C7E}\u{0CE6}-\u{0CEF}\u{0D66}-\u{0D75}\u{0DE6}-\u{0DEF}\u{0E50}-\u{0E59}\u{0ED0}-\u{0ED9}\u{0F20}-\u{0F33}\u{1040}-\u{1049}\u{1090}-\u{1099}\u{1369}-\u{137C}\u{16EE}-\u{16F0}\u{17E0}-\u{17E9}\u{17F0}-\u{17F9}\u{1810}-\u{1819}\u{1946}-\u{194F}\u{19D0}-\u{19DA}\u{1A80}-\u{1A89}\u{1A90}-\u{1A99}\u{1B50}-\u{1B59}\u{1BB0}-\u{1BB9}\u{1C40}-\u{1C49}\u{1C50}-\u{1C59}\u{2070}\u{2074}-\u{2079}\u{2080}-\u{2089}\u{2150}-\u{2182}\u{2185}-\u{2189}\u{2460}-\u{249B}\u{24EA}-\u{24FF}\u{2776}-\u{2793}\u{2CFD}\u{3007}\u{3021}-\u{3029}\u{3038}-\u{303A}\u{3192}-\u{3195}\u{3220}-\u{3229}\u{3248}-\u{324F}\u{3251}-\u{325F}\u{3280}-\u{3289}\u{32B1}-\u{32BF}\u{A620}-\u{A629}\u{A6E6}-\u{A6EF}\u{A830}-\u{A835}\u{A8D0}-\u{A8D9}\u{A900}-\u{A909}\u{A9D0}-\u{A9D9}\u{A9F0}-\u{A9F9}\u{AA50}-\u{AA59}\u{ABF0}-\u{ABF9}\u{FF10}-\u{FF19}]+/u";
}